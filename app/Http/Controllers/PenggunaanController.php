<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaanController extends Controller
{
    public function index()
    {
        return view('Pengguna.Layouts.info_penggunaan');
    }
}
