<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('main_view');
});
Route::get('/home', function () {
    return view('home');
});

Route::namespace('Auth')->group(function () {
    Route::get('login',[LoginController::class,'show_login_form'])->name('login');
    Route::post('login',[LoginController::class,'process_login']);
    Route::get('register',[LoginController::class,'show_signup_form'])->name('register');
    Route::post('register',[LoginController::class,'process_signup']);
    Route::post('logout',[LoginController::class,'logout'])->name('logout');

});

    // Route::post('/login','LoginController@process_login')->name('login');
    // Route::get('/register','LoginController@show_signup_form')->name('register');
    // Route::post('/register','LoginController@process_signup');
    // Route::post('/logout','LoginController@logout')->name('logout');
  


Route::get('/category', function () {
    return view('category');
});

Route::get('/student_category', function () {
    return view('student_category');
});
Route::get('/theme1_category', function () {
    return view('theme1_category');
});
Route::get('/theme2_category', function () {
    return view('theme2_category');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/evaluation', function () {
    return view('evaluation');
});
