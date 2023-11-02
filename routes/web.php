<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeagueController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SignupControlller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('usman', [TeamController::class, 'index']);
Route::post('usman-haider', [TeamController::class, 'store'])->name('usman');
Route::get('usman/{id}', [TeamController::class, 'edit'])->name('team.edit');
Route::patch('usman/{id}', [TeamController::class, 'update'])->name('usman.update');

Route::get('player', [PlayerController::class, 'index'])->name('player');
Route::post('player-info', [PlayerController::class, 'store'])->name('player-info');
Route::get('player/{id}', [PlayerController::class, 'edit'])->name('player.edit');
Route::patch('player/{id}', [PlayerController::class, 'update'])->name('player.update');


Route::get('league', [LeagueController::class, 'index'])->name('league');
Route::post('league-show', [LeagueController::class, 'store'])->name('league-show');
Route::get('league/{id}', [LeagueController::class, 'edit'])->name('league-edit');
Route::patch('league/{id}', [LeagueController::class, 'update'])->name('league.update');

Route::get('signup', [SignupControlller::class, 'index'])->name('signup');
Route::post('signup-store', [SignupControlller::class, 'store'])->name('signup-store');
Route::get('signup/{id}', [SignupControlller::class, 'edit'])->name('signup.edit');
Route::patch('signup/{id}', [SignupControlller::class, 'update'])->name('signup.update');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'loginAttempt'])->name('loginattempt');
