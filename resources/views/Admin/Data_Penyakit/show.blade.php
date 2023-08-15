@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <div>
            <h1>Data Penyakit - Detail</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item"><a href="{{ route('Data_Penyakit.index') }}">Data Penyakit</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </nav>
            <div class="card p-3">
                <h2>Detail Penyakit</h2>
                <hr>
                <div class="form-group mb-1">
                    <label for="kd_penyakit">Kode Penyakit</label>
                    <input type="text" class="form-control" value="{{ $penyakit->kd_penyakit }}" readonly>
                </div>
                <div class="form-group mb-1">
                    <label for="nama_penyakit">Nama Penyakit</label>
                    <input type="text" class="form-control" value="{{ $penyakit->nama_penyakit }}" readonly>
                </div>
                <div class="form-group mb-1">
                    <label for="deskripsi">Deskripsi</label>
                    <div>{!! $penyakit->deskripsi !!}</div>
                </div>
                <div class="form-group mb-1">
                    <label for="solusi">Solusi</label>
                    <div>{!! $penyakit->solusi !!}</div>
                </div>
               
                <a href="{{ route('Data_Penyakit.index') }}" class="btn btn-primary">Kembali ke halaman sebelumnya
                </a>
            </div>
        </div>
    </main>
@endsection
