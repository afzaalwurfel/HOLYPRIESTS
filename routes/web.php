<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;

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
    return view('signin');
});
Route::get('signin', function () {
    return view('signin');
});
Route::get('signup', function () {
    return view('signup');
});

Route::get('/home', function () {
    return view('home');
});
// Route::post('login', function () {
    
// });

// Route::resource('login', [User::class]);
Route::post('login', [UsersController::class,'login']);
Route::post('Register', [UsersController::class,'store']);

