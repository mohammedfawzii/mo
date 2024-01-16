<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/',[Controller::class,'index']);
Route::resource('projects',ProjectController::class)->middleware(['auth','verified']);
// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('logout', function () {Auth::logout();return redirect('/');});
Route::fallback(function() {return view('index');});
