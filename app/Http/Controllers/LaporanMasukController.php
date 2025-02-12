<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanMasukController extends Controller
{
    public function index()
    {
        return view('pagesadmin.laporanmasuk.data_laporan');
    }
}
