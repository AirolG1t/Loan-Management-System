<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
use App\Http\Controllers\Admin\{AuthController, ProfileController, UserController};
=======
use App\Http\Controllers\LoginController;
>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/user', [ProfileController::class, 'user'])->name('user');
=======
Route::get('/',[LoginController::class,'index'])->name('index');
Route::post('/',[LoginController::class,'register'])->name('register');
Route::get('/user',[LoginController::class,'user'])->name('user');
>>>>>>> Stashed changes
