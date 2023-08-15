@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <div>
            <h1>Data Artikel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Artikel</a></li>
                    <li class="breadcrumb-item active">Data Artikel</li>
                </ol>
            </nav>
        </div>

        <section id="services" class="services sections-bg">

            <div class="card mb-3 m-4 pe-3 p-4">
             
                <div class="">
                  <div class="card-body">
                    <h1 class=""><b>{{ $data->judul }}</b></h1><br>
                    <div class="row">
                    <div class="col-md-6 text-start">
                        {!! $data->penulis !!}
                    </div>
                    <div class="col-md-6 text-end">
                        <p class="card-text"><small class="text-muted">Terakhir diperbarui: {{ $data->updated_at }}</small></p>
                    </div>
                    </div>
                    <hr>
                    
                          <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid text-center" alt="image"  style="width: 850px; height: 300px;">
                       
                   <br>
                    <p class="card-text" style="no-border">{!! $data->isi !!}</p>
                    <hr>
                  <div class="">
                    <h6>Referensi</h6>
                    <p class="text-muted">{{ $data->referensi }}<</p>
                  </div>
                  
                   
                  </div>
                </div>
              </div>
            </div>
          
          </section>

    </main>
@endsection