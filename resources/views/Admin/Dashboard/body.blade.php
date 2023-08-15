@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
        <section class="section dashboard">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row col-md-12">
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                        

                            <div class="card-body">
                                <h5 class="card-title">Jumlah<span>| Pengguna</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $totalAdmins }}</h6>
                                        <span class="text-success small pt-1 fw-bold"> Users</span> 

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card revenue-card">



                            <div class="card-body">
                                <h5 class="card-title">Jumlah<span>| Penyakit</span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6> {{ $Penyakit }}</h6>
                                        <span class="text-success small pt-1 fw-bold">Penyakit</span> 

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-md-4">
                      <div class="card info-card customers-card">
                    
                        <div class="card-body">
                            <h5 class="card-title">Jumlah<span>| Gejala</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $gejala }}</h6>
                                    <span class="text-success small pt-1 fw-bold">Gejala</span> 
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card info-card customers-card">
                      
                          <div class="card-body">
                              <h5 class="card-title">Jumlah<span>| Konsultasi</span></h5>
                              <div class="d-flex align-items-center">
                                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                      <i class="bi bi-people"></i>
                                  </div>
                                  <div class="ps-3">
                                      <h6>{{ $Konsultasi }}</h6>
                                      <span class="text-success small pt-1 fw-bold">History Konsultasi</span> 
                                  </div>
                              </div>
                          </div>
                          </div>
                      </div>
                 </div>
            </div>
        </section>

        
         

    </main><!-- End #main -->
@endsection
