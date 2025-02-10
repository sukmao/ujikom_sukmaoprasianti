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
    return view('auth.login');
});


Route::get('/', function () {
    return view('pagesadmin.dashboard_admin');
});
Route::get('/dashboardmasyarakat', function () {
    return view('pagesmasyarakat.dashboard_masyarakat');
});

Route::get('/pegawai', function () {
    return view('pagesadmin.pegawai.data_pegawai');
});
