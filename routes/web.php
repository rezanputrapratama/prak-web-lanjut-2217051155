<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::resource('users', UserController::class);
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');