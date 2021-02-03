<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('main_view');
});
Route::get('/login', function () {
    return view('login');
});

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
