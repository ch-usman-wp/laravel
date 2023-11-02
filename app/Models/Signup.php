<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Signup extends Model
{
    use HasFactory;
    protected $table = "new_signups";

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    protected static function booted()
    {
        static::saving(function ($user) {
            if (!empty($user->password)) {
                $user->password = Hash::make($user->password);
            }
        });
    }
}
