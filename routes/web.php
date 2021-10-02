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

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/jadwal-pengajian', function () {
    return view('jadwal-pengajian', [
        "title" => "Jadwal Pengajian"
    ]);
});

Route::get('/informasi-keuangan', function () {
    return view('informasi-keuangan', [
        "title" => "Informasi Keuangan"
    ]);
});

