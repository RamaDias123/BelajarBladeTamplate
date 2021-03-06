<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::prefix('/school')->group (function () {
    Route::get('/student', [StudentController::class, 'index']);
    Route::get('/teacher', [TeacherController::class, 'index']);
});

Route::get('navbar', function () {
    return view('/navbar', [NavbarController::class, 'index']);
});
