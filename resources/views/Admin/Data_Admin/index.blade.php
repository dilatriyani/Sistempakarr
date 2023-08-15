@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <div>
            <h1>Data Pengguna</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Pengguna</a></li>
                    <li class="breadcrumb-item active">Data Pengguna</li>
                </ol>
            </nav>
            <div class="p-2 ">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalTambah"> + Tambah</button>
            </div>

            @if (session('berhasil'))
                <div class="alert alert-success">
                    {{ session('berhasil') }}
                </div>
            @endif

            <div class="card mt-4">
                <div class="card-body">
                    <!-- Table with hoverable rows -->
                    <div class="table-responsive">
                        <table class="table table-hover mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $index => $item)
                                    <tr>
                                        <td scope="row">{{ $index + $user->firstitem() }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td class="p-2">
                                            <div class="">
                                                <a href="#exampleModalEdit{{ $item->id }}" data-bs-toggle="modal"
                                                    class="btn btn-primary  float-end"><i
                                                        class='bx bx-edit'></i></a>
                                            </div>
                                            <div class="">
                                                <form onsubmit="return confirm('Apakah anda yakin ?');"
                                                    action="{{ route('Data_Admin.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger shadow" type="submit" >
                                                        <a href="/Data_Admin/{{ $item->id }}" method="post"
                                                            onsubmit="return confirm('Apakah anda yakin ?');"><i
                                                                class="bx bxs-trash" style="color:white"></i>
                                                        </a>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with hoverable rows -->
                    {{ $user->links() }}
                </div>
            </div>
           
            @include('Admin.Data_Admin.edit')

            {{-- modal tambah admin --}}
            <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" style="width: 125%">
                    <div class="modal-content p-3" style="width: 125%">
                        <div class="modal-header hader">
                            <h3 class="modal-title" id="exampleModalLabel">
                                Tambah Data Pengguna
                            </h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('/Admin/Data_Admin') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <div class="form-group mb-1">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Input name" @error('name') is-invalid @enderror value="">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-1">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        placeholder="Input email" @error('email') is-invalid @enderror
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-1">
                                    <label for="password">password</label>
                                    <input type="pasword" class="form-control" name="password" id="password" placeholder=""
                                        @error('password') is-invalid @enderror>
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-1">
                                    <label for="role">Role</label>
                                    <select class="form-control select2" aria-label="Default select example" name="role"
                                        id="role">
                                        <option selected>Pilih Sebagai</option>
                                        <option value="pakar">Pakar</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>


                            </div>
                            <div class="modal-footer d-md-block">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </main>
@endsection
