@extends('Admin.Partials.index')

@section('container')

<main id="main" class="main">
    <div>
        <h1>Data Konsultasi - Detail</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item"><a href="{{ route('Data_Penyakit.index') }}">Data Konsultasi</a></li>
                <li class="breadcrumb-item active">Detail</li>
            </ol>
        </nav>
        <div class="card p-3">
            <h2>Detail Konsultasi</h2>
            <hr>
           
            <div class="form-group mb-1">
                <label for="persentase">Waktu Diagnosa:</label>
                <div>{{  $riwayat_diagnosa->created_at}}</div>
            </div>
            <div class="form-group mb-1">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" value="{{ $riwayat_diagnosa->nama }}" readonly>
            </div>
            <div class="form-group mb-1">
                <label for="">Umur</label>
                <input type="text" class="form-control" value="{{ $riwayat_diagnosa->umur }} tahun" readonly>
            </div>
            <div class="form-group mb-1">
                <label for="">Alamat</label>
                <input type="text" class="form-control" value="{{ $riwayat_diagnosa->alamat }}" readonly>
            </div>
            <div class="form-group mb-1">
                <label for="">Penyakit</label>
                <input type="text" class="form-control" value="{{ $riwayat_diagnosa->penyakit }}" readonly>
            </div>
            <div class="form-group mb-1">
                <label for="persentase"><b>Persentase</b></label>
                <div>{{  $riwayat_diagnosa->persentase }} %</div>
            </div>
            <div class="form-group mb-1">
                <label for="solusi"><b>Solusi</b></label>
                <div>{!! $riwayat_diagnosa->solusi !!}</div>
            </div>
           
            {{-- <a href="{{ route('Data_Diagnosa.index') }}" class="btn btn-primary">Kembali ke halaman sebelumnya --}}
            </a>
        </div>
    </div>
</main>

@endsection
