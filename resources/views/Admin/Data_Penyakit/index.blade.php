@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <div>
            <h1>Data Penyakit</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Admin</li>
                    <li class="breadcrumb-item active">Data Penyakit</li>
                </ol>
            </nav>
            <div class="form-group mb-1 float-end">
                <input type="text" class="form-control" id="searchInput" placeholder="Search by name">
            </div>
            
            <div class="p-2">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalTambah"> + Tambah</button>
            </div>

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


            <div class="card p-3">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama Penyakit</th>
                                <th scope="col">Deskripsi Penyakit</th>
                                <th scope="col">Solusi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_penyakit as $index => $item)
                                <tr>
                                    <td scope="row">{{ $index + $data_penyakit->firstitem() }}</td>
                                    <td>{{ $item->kd_penyakit }}</td>
                                    <td>{{ $item->nama_penyakit }}</td>
                                    <td>
                                        <div class="scrollable-field">
                                            {!! Str::limit($item->deskripsi, 100) !!}
                                            @if (strlen($item->deskripsi) > 100)
                                                <a href="#" class="read-more-link" onclick="toggleDescription(event, '{{ $item->id }}')">Read More</a>
                                                <div id="deskripsi{{ $item->id }}" class="extra-content" style="display: none;">
                                                    {!! $item->deskripsi !!}
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="scrollable-field">
                                            {!! Str::limit($item->solusi, 100) !!}
                                            @if (strlen($item->solusi) > 100)
                                                <a href="#" class="read-more-link" onclick="toggleSolution(event, '{{ $item->id }}')">Read More</a>
                                                <div id="solusi{{ $item->id }}" class="extra-content" style="display: none;">
                                                    {!! $item->solusi !!}
                                                </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <a href="#exampleModalEdit{{ $item->id }}" data-bs-toggle="modal" class="btn btn-primary fw-bold rounded-pill shadow"><i class='bx bx-edit'></i></a>
                                    
                                            <form onsubmit="return confirm('Apakah anda yakin ?');" action="{{ route('Data_Penyakit.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger fw-bold rounded-pill shadow" type="submit">
                                                    <a href="/Penyakit/{{ $item->id }}" method="post" onsubmit="return confirm('Apakah anda yakin ?');"><i class="bx bxs-trash" style="color:white"></i></a>
                                                </button>
                                            </form>
                                            <a href="{{ route('Data_Penyakit.show', $item->id) }}" class="btn btn-info fw-bold rounded-pill shadow">
                                                <i class='bx bx-show'></i>
                                            </a>
                                        </div>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $data_penyakit->links() }}
            </div>
        </div>
        @include('Admin.Data_Penyakit.edit')


        <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="width: 125%">
            <div class="modal-content p-3" style="width: 125%">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">
                        Tambah Data Penyakit
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/Admin/Data_Penyakit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-1">
                            <label for="kd_penyakit">Kode Penyakit</label>
                            
                                <input type="text" class="form-control" name="kd_penyakit" id="kd_penyakit"
                                    placeholder="Input Kode Penyakit" readonly value="{{ $kd_penyakit }}">
                            @error('kd_penyakit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-1">
                            <label for="nama_penyakit">Nama Penyakit</label>
                            <input type="text" class="form-control" name="nama_penyakit" id="nama_penyakit"
                                placeholder="" @error('nama_penyakit') is-invalid @enderror
                                value="{{ old('nama_penyakit') }}">
                            @error('nama_penyakit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-1">
                            <label for="deskripsi">Deskripsi</label>
                            <div class="scrollable-field">
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group mb-1">
                            <label for="solusi">Solusi</label>
                            <div class="scrollable-field">
                                <textarea name="solusi" id="solusi" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-primary waves-effect waves-light"
                        onclick="disable1(this);">
                        <span id="buttonText">Simpan</span>
                    </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
        {{-- end --}}


        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('solusi', {
                autoParagraph: false
            });
            CKEDITOR.replace('deskripsi', {
                autoParagraph: false
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </main>
@endsection

<script>
    function disable1(button) {
        button.disabled = true;
        var buttonText = document.getElementById("buttonText");
        buttonText.textContent = "Tunggu...";

        setTimeout(function() {
            button.form.submit();
        }, 500);
    }

    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toLowerCase();
        table = document.querySelector("table");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2]; // Change 2 to the column index you want to search in (0-based)
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    // Attach the searchTable function to the keyup event of the search input field
    document.getElementById("searchInput").addEventListener("keyup", searchTable);
</script>
<script>
    function toggleDescription(event, id) {
        event.preventDefault();
        const descriptionDiv = document.getElementById('deskripsi' + id);
        descriptionDiv.style.display = descriptionDiv.style.display === 'none' ? 'block' : 'none';
        const readMoreLink = event.target;
        readMoreLink.textContent = readMoreLink.textContent === 'Read More' ? 'Read Less' : 'Read More';
    }

    function toggleSolution(event, id) {
        event.preventDefault();
        const solutionDiv = document.getElementById('solusi' + id);
        solutionDiv.style.display = solutionDiv.style.display === 'none' ? 'block' : 'none';
        const readMoreLink = event.target;
        readMoreLink.textContent = readMoreLink.textContent === 'Read More' ? 'Read Less' : 'Read More';
    }
</script>


