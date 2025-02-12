<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;

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
Route::get('/loginmasyarakat', function () {
    return view('pagesmasyarakat.login_masyarakat');
});
Route::get('/dashboardadmin', function () {
    return view('pagesadmin.dashboard_admin');
});
Route::get('/dashboardmasyarakat', function () {
    return view('pagesmasyarakat.dashboard_masyarakat');
});
Route::get('/pegawai', function () {
    return view('pagesadmin.pegawai.data_pegawai');
});
Route::get('/laporanmasuk', function () {
    return view('pagesadmin.laporanmasuk.data_laporan');
});
Route::get('/generatereport', function () {
    return view('pagesadmin.generatereport.data_generate');
});
Route::get('/register', function () {
    return view('pagesmasyarakat.register_masyarakat');
});
Route::resource('/datamasyarakat', MasyarakatController::class);
