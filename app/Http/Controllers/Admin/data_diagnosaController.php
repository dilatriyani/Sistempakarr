<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HistoryDiagnosa;

class data_diagnosaController extends Controller
{
    public function index()
    {
        $data = [
            "riwayat_dignosa" => HistoryDiagnosa::all(),
        ];

        return view('Admin.Data_Diagnosa.index', $data);
    }
    
    public function show($id)
{
    $riwayat_diagnosa = HistoryDiagnosa::findOrFail($id);
    return view('Admin.Data_Diagnosa.show', compact('riwayat_diagnosa'));
}
}
