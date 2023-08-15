@extends('Pengguna.Partials.index')
@section('container')

    <body>
      
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('assets/img/hand.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Tentang Aplikasi</h3>
                          <p>XSISC aplikasi sistem pakar identifikasi dini faktor resiko penyakit kolestrol.</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('assets/img/blood.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Tentang Aplikasi</h3>
                          <p>XSISC aplikasi sistem pakar identifikasi dini faktor resiko penyakit kolestrol</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/obat.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Tentang Aplikasi</h3>
                          <p>EXSISC aplikasi sistem pakar identifikasi dini faktor resiko penyakit kolestrol</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
           
           
                    <div class="mt-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="card" style="height:40rem;">
                                <div class="card-body">
                                    <h5 class="card-title pe-5"><b> Apa itu EXSISC?</b></h5>
                                    <div class="card-body ">
                                        <p class="card-text justify-text mt-1">  EXSISC, singkatan dari Expert System Kolesterol, adalah sebuah aplikasi yang dirancang sebagai sistem
                                            pakar untuk identifikasi dini faktor risiko penyakit terkait kolesterol. Aplikasi ini bertujuan untuk
                                            membantu pengguna dalam memahami dan mengenali faktor-faktor yang dapat meningkatkan risiko terkena
                                            penyakit terkait kolesterol, sehingga pengguna dapat mengambil langkah-langkah pencegahan yang tepat.</p>
                                            <br>
                                            <p class="card-text justify-text mt-1">
                                                Aplikasi EXSISC menggunakan pendekatan sistem pakar, yang menggabungkan pengetahuan dan pengalaman dari
                                                para ahli dalam bidang kesehatan untuk memberikan penilaian risiko yang akurat kepada pengguna. Sistem
                                                pakar ini didasarkan pada aturan-aturan yang telah ditentukan sebelumnya, yang memungkinkan aplikasi untuk
                                                menganalisis gejala, riwayat kesehatan, dan faktor-faktor risiko individu yang berkontribusi terhadap
                                                penyakit kolesterol.
                                            </p>
                                    </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card" style="height:40rem;">
                                  <div class="card-body">
                                      <h5 class="card-title pe-5"><b> Mengapa harus Aplikasi EXSISC?</b></h5>
                                      <div class="card-body ">
                                          <p class="card-text justify-text mt-1">   Keunggulan EXSISC sebagai aplikasi sistem pakar adalah kemampuannya untuk memberikan penilaian risiko
                                            yang personal dan spesifik berdasarkan karakteristik individu pengguna. Dengan demikian, pengguna dapat
                                            lebih memahami faktor-faktor risiko yang mempengaruhi kondisi kesehatan mereka dan mengambil langkah-langkah
                                            yang tepat untuk mencegah penyakit terkait kolesterol.</p>
                                              <br>
                                              <p class="card-text justify-text mt-1">
                                                Namun, penting untuk diingat bahwa EXSISC bukan pengganti dari konsultasi langsung dengan tenaga medis
                                                profesional. Aplikasi ini hanya berfungsi sebagai alat bantu yang memberikan informasi awal dan rekomendasi
                                                umum. Jika pengguna memiliki kekhawatiran atau gejala yang mengkhawatirkan, disarankan untuk berkonsultasi
                                                dengan dokter atau tenaga medis yang berkualifikasi untuk evaluasi lebih lanjut dan penanganan yang sesuai.
                                              </p>
                                      </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section><!-- End About Us Section -->

    </body>
@endsection


{{-- @extends('Pengguna.Partials.index')
@section('container')

    <body>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
      
              <div class="section-header">
                <h2>Tentang Aplikasi</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
              </div>
      
              <div class="row gy-4">
                <div class="col-lg-6">
                  <h3>Voluptatem dignissimos provident quasi corporis</h3>
                  <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                  <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
                  <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
                </div>
                <div class="col-lg-6">
                  <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    </p>
      
                    <div class="position-relative mt-4">
                      <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                      <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
          </section><!-- End About Us Section -->
      
    </body>
@endsection
 --}}
