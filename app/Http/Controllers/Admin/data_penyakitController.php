<?php

namespace App\Http\Controllers\Admin;
use App\Models\data_penyakit;
use App\Models\Gejala;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class data_penyakitController extends Controller
{
    public function index()
    
    {
        $latestKode = data_penyakit::orderBy('id', 'desc')->first(); // Mengambil data penyakit dengan kode terakhir
        $lastNumber = $latestKode ? intval(substr($latestKode->kd_penyakit, 1)) : 0; // Mendapatkan angka terakhir dari kode penyakit
    
        $nextNumber = $lastNumber + 1; // Membuat angka berikutnya
    
        $kd_penyakit = 'P' . $nextNumber; // Membuat kode penyakit baru
    
        $data = [
            "data_penyakit" => data_penyakit::paginate(5),
            "data_gejala" => Gejala::all(),
            "kd_penyakit" => $kd_penyakit, // Mengirimkan data kode penyakit terbaru ke view
        ];
    
        return view('Admin.Data_Penyakit.index', $data);
        // $data = [
        //     "data_penyakit" => data_penyakit::paginate(5)
        // ];

        // return view('Admin.Data_Penyakit.index', $data);
    }
    public function show($id)
    {
        // Find the penyakit with the given ID
        $penyakit = data_penyakit::findOrFail($id);

        // Pass the penyakit data to the "show" view
        return view('Admin.Data_Penyakit.show', compact('penyakit'));
    }

   
    public function store(Request $request)
    {

        data_penyakit::create([
            'kd_penyakit' => $request->kd_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
            'solusi' => $request->solusi,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->back()->with('success', 'Data penyakit berhasil ditambahkan!');
    }

    public function edit(Request $request)
    {
        $dp = [
            "edit" => data_penyakit::where("id", $request->id)->first()
        ];

        return view('Admin.Data_Penyakit.edit', $dp);
    }

    public function update(Request $request, $id)
    {
        $data_penyakit = data_penyakit::findOrFail($id);
        $data_penyakit->kd_penyakit = $request->kd_penyakit;
        $data_penyakit->nama_penyakit = $request->nama_penyakit;
        $data_penyakit->solusi = $request->solusi;
        $data_penyakit->deskripsi = $request->deskripsi;
        $data_penyakit->save();

        return redirect()->back()->with('success', 'Data penyakit berhasil diubah!');
    }

    public function destroy($id)
    {
        $data_penyakit = data_penyakit::findOrFail($id);
        $data_penyakit->relatedModel()->delete();
        $data_penyakit->delete();

        //redirect to index
        return redirect('/Admin/Data_Penyakit')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
 