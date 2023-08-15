@extends('Pengguna.Partials.index')
@section('container')
<section class="slider_section ">
    <div class="container position-relative">
{{-- 
        @if (Session::has('error'))
        <div class="row">
            <div class="alert alert-danger alert-danger" role="alert">
                <strong>Error !</strong> {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        </div>
        @endif --}}

        <div class="dot_design">
            <img src="{{ asset('css/images/dots.png') }}" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        Hello!! <br>

                                        Selamat datang di <span>EXSISC</span>
                                    </h1>
                                    <p>
                                        Exsisc adalah aplikasi sistem pakar untuk mengidentifikasi dini resiko penyakit
                                        kolestrol
                                    </p>
                                    {{-- <div class="d-flex justify-content-center justify-content-lg-start">
                                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn-get-started">Konsultasi</a>
                                    </div> --}}
                                    <div class="d-flex justify-content-center justify-content-lg-start">
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" class=" btn-get-started">
                                            Konsultasi
                                        </button>

                                    </div>
                                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" class=" btn-get-started">
                                        Konsultasi
                                    </button> --}}

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{ asset('css/images/slider-img.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <div class="play_btn">
                                        <button>
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h1>
                                        Kenapa Harus <br>

                                        <span>
                                            EXSISC
                                        </span>
                                    </h1>
                                    <p>
                                        EXSISC, aplikasi sistem pakar, menilai risiko berdasarkan karakteristik pengguna,
                                        membantu pemahaman dan langkah pencegahan kesehatan terkait kolesterol.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-lg-start">
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" class=" btn-get-started">
                                            Konsultasi
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{ asset('css/images/slider-img.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                    <img src="{{ asset('css/images/prev.png') }}" alt="">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                    <img src="{{ asset('css/images/next.png') }}" alt="">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      </div>
    
   {{-- modal  --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <form method="POST" action="/Pengguna/Diagnosa/Mulai">
        @csrf
            <button type="button" class="btn-close px-3 py-3" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <h5 style="font-color:#3bb1a3,font-size: 25px" align="center" class="mb-3">Isi data dibawah ini
                    untuk melanjutkan diagnosa</h5>
                <div class="card p-4" style="border-color: #3bb1a3">
                    <div class="mt-3 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input required type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Usia</label>
                        <input required type="text" class="form-control" id="age" name="age">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <input required type="text" class="form-control" id="address" name="address">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-white" style="background-color: #3bb1a3">Lanjut</button>
            </div>
        </form>
        </div>
    </div>
</div>

</section>
@endsection
