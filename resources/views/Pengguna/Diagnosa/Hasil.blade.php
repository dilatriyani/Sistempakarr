@php
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\Admin\dashboardController;
@endphp


@extends('Pengguna.Partials.index')
@section('container')

    <body>
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <section id="features" class="features">
                    <h3 class="text-center"><b>HASIL IDENTIFIKASI </b></h3>
                    <div class="card">
                        <div class="container">
                            <div class="container-fluid pt-4 px-4 ">
                                <div class="bg-light rounded p-4">
                                    <div class="alert alert-success">Berdasarkan gejala dan faktor penyebab yang dipilih dapat
                                        disimpulkan:</div>
                                    <table class="table table-striped">
                                        <tr>
                                            <th width="150px">Nama</th>
                                            <th width="30px">:</th>
                                            <th>{{ $name }}</th>
                                        </tr>
                                        <tr>
                                            <th>Umur </th>
                                            <th>:</th>
                                            <th>{{ $age }} tahun</th>
                                        </tr>
    
                                        <tr>
                                            <th>Alamat</th>
                                            <th>:</th>
                                            <th>{{ $address }}</th>
                                        </tr>
    
                                        <tr>
                                            <th>Nama Penyakit</th>
                                            <th>:</th>
                                            <th> {{ $penyakit->nama_penyakit }}</th>
                                        </tr>
                                        <tr>
                                            <th>Persentase</th>
                                            <th>:</th>
                                            <th> {{ $score }} %</th>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Konsultasi</th>
                                            <th>:</th>
                                            <th>{{ date('d-m-Y') }}</th>
                                        </tr>
                                    </table>
                                    <hr>
                                    <h6> Deskripsi Penyakit : </h6>
                                    <p>
                                        {!! $penyakit->deskripsi !!}
                                    </p>
                                </div>
                                <hr>
                                <h6>Gejala Terpilih : </h6>
    
                                <div class="col-md-10">
                                    @foreach ($gejala_list as $gejala)
                                        <p> - {{ $gejala }}</p>
                                    @endforeach
                                </div>
                                <div class="bg-light rounded p-4" style="background-color: rgb(194, 208, 220)">
                                    <h6>Pengobatan/Solusi : </h6>
                                    <p>
                                        {!! $penyakit->solusi !!}
                                    </p>
                                </div>
                                <div class="mt-5 mb-4 pe-5 text-center">
                                    @if (!isset($pdfMode))
                                    <!-- Menambahkan kondisi untuk tombol cetak hanya dalam mode bukan PDF -->
                                    <a><button id="printButton" type="button" class="btn btn-secondary col-sm-3">Cetak</button></a>
                                @endif
                                </div>
                                {{-- <a href="{{ URL('Pengguna.Diagnosa.cetak') }}" class="btn btn-secondary">Cetak</a> --}}
                                <!-- Contoh link untuk menuju halaman cetak -->
                                {{-- <a href="{{ route('diagnosa.cetak') }}" class="btn btn-primary">Cetak</a> --}}
    
                            </div>
                            
                           
                        </div>
                    </div>
                 

             </section>

    </body>
    <script>
        document.getElementById('printButton').addEventListener('click', function() {
            window.print();
        });

        // Menambahkan event listener untuk mendeteksi saat dokumen diubah menjadi PDF
        window.addEventListener('beforeprint', function() {
            // Mengatur mode PDF ke true
            window.pdfMode = true;

            // Menghilangkan tombol cetak saat dalam mode PDF
            var printButton = document.getElementById('printButton');
            if (printButton) {
                printButton.style.display = 'none';
            }
        });

        // Menambahkan event listener untuk mendeteksi saat keluar dari mode cetak/PDF
        window.addEventListener('afterprint', function() {
            // Mengatur mode PDF kembali ke false
            window.pdfMode = false;

            // Mengembalikan tampilan tombol cetak setelah keluar dari mode PDF
            var printButton = document.getElementById('printButton');
            if (printButton) {
                printButton.style.display = 'block';
            }
        });
    </script>
    {{-- <script>
        document.getElementById('printButton').addEventListener('click', function() {
            window.print();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> --}}
@endsection
