<?php

use App\Http\Middleware\checkadmin;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/demo', function () {
    return view('demo');
})->middleware('checkadmin');

Route::get('/login', function () {
    return view('login');
});

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/index1', function () {
//     return view('index1');
// });

// Route::get('/admin/{age?}', function () {
//     return view('trangchu');    
// })->middleware('checkage');
// Route::get('gioithieu', function () {
//     return view('gioithieu');
// });
// Route::get('sanpham', function () {
//     return view('sanpham');
// });
// Route::get('lienhe', function () {
//     return view('lienhe');
// });
// Route::get('ban', function () {
//     return view('ban');
// });


