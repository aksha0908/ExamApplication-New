<?php

use App\Http\Controllers\Admin\Auth\AuthController as AuthAuthController;
use App\Http\Controllers\Student\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//New Routes
Route::get('student/login', [AuthController::class, 'index'])->name('student.login');

Route::get('login', [AuthAuthController::class, 'index'])->name('login');

