@extends('Pengguna.Partials.index')
@section('container')
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Petunjuk Penggunaan</h2>
                <p>Informasi penggunaan berisikan langkah-langkah cara menggunakan aplikasi untuk berkonsultasi</p>
            </div>
            <div class="row " data-aos="fade-up" data-aos-delay="100">
            <div class="row">
                <div class="col-md-4">
                  <div class="card" style="height:40rem;">
                    <div class="card-body">
                      <div class="img-box text-center p-3">
                        <img src="{{ asset('css/images/doctor.png') }}" alt="" width="75" height="75">
                      </div>
                        <h5 class="card-title text-center"><i class="bi bi-1-circle-fill p-2"></i><b>Konsultasi</b></h5>
                        <div class="card-body ">
                            <p class="card-text justify-text mt-1">Langkah untuk melakukan konsultasi penyakit kolestrol
                                yang pertama dilakukan yaitu memilih menu <b>Konsultasi</b> atau button <b>Mulai</b> pada
                                halaman home</p>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card" style="height:40rem;">
                    <div class="card-body">
                      <div class="img-box text-center p-3">
                        <img src="{{ asset('css/images/forms.png') }}" alt="" width="75" height="75">
                      </div>
                    <h5 class="card-title text-center"><i class="bi bi-2-circle-fill p-2"></i><b>Isi Form</b></h5>
                    <div class="card-body ">
                        <p class="card-text justify-text mt-1">Langkah kedua untuk melakukan konsultasi penyakit kolestrol
                            pada aplikasi EXSISC yaitu mengisi data diri pada form konsultasi, formkonsultasi akanmuncul
                            setelah Andamemilih menu Konsultasi atau klik button mulai pada halaman home <b>Konsultasi</b>
                            atau button <b>Mulai</b> pada halaman home</p>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height:40rem;">
                      <div class="card-body">
                        <div class="img-box text-center p-3">
                          <img src="{{ asset('css/images/check-list.jpg') }}" alt="" width="75" height="75">
                        </div>
                      <h5 class="card-title text-center"><i class="bi bi-3-circle-fill p-2"></i><b>Pilih Kondisi</b></h5>
                      <div class="card-body ">
                          <p class="card-text justify-text mt-1">Langkah ketiga untuk melakukan konsultasi penyakit kolestrol
                              pada aplikasi EXSISC yaitu memilih gejala atau faktor penyebab yang dialamai, setelah Anda memilih kondisi sesuai yang anda alami dan anda rasakankemudian sistem akan meproses identifikasi penyakit menggunakan metode forward chaining 
                              </p>
                      </div>
                      </div>
                    </div>
                  </div>
                 
              </div>
            </div>
        </div>
    </section><!-- End Our Services Section -->
@endsection
