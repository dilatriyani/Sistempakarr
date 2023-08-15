
@extends('Pengguna.Partials.index')
@section('container')

<section id="services" class="services sections-bg">

  <div class="card  m-5 px-5 pe-5" style="max-width: 100%; ">
    
      <div class="p-5">
        <div class="card-body me-3 md-3 pe-5 px-5">
          <h1 class="card-title"><b>{{ $artikels['judul'] }}</b></h1>
          <div class="row">
            <div class="col-md-6 text-start">
                {{$artikels['penulis']}}
            </div>
            <div class="col-md-6 text-end">
                <p class="card-text"><small class="text-muted">Terakhir diperbarui: {{ $artikels['updated_at']  }}</small></p>
            </div>
            </div>
<hr>
<div class="pe-5 px-5">
  <img src="{{ asset('storage/' . $artikels->image) }}" class="img-fluid me-3 " alt="image"  style="width: 850px; height: 300px; position:centered">

</div>

          <p class="card-text" style="no-border">{!! $artikels['isi'] !!}</p>
          <hr>
          <div class="">
            <h6>Referensi</h6>
            <p class="text-muted">{{ $artikels->referensi }}<</p>
          </div>
         
          <hr>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection

