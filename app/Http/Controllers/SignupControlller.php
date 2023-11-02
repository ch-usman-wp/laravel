<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;


use App\Models\User;
use Illuminate\Http\Request;

class SignupControlller extends Controller
{
    public function index(){
        return view('signup',[
            'signup'=> User::all()
        ]);

    }
    public function store(Request $request){
        // dd('asd');
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ],
        // [
        //     'name.required' => 'test',
        //     // 'email.required' => 'emailllll',
        //     'email.email' => 'email address galat ha'
        // ]
    );
        // $formpassword = $request['password'];
        // $request['password'] = Hash::make($formpassword);
        // return $request->all();
        User::forcecreate($request->except('_token'));
        return redirect()->route('signup');
    }
    public function edit(string $id){
        // dd('usman');
        $signup=User::find($id);
        return view('signup-edit',[
            'signup'=>$signup
        ]);
    }
    public function update(Request $request, string $id){
        unset($request['_token']);
        unset($request['_method']);
        $signup=User::find($id);
        $signup->update($request->all());
    }

}
