@foreach ($user as $item)
<div class="modal fade" id="exampleModalEdit{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 50%">
        <div class="modal-content">
            <div class="modal-header hader">
                <h3 class="modal-title" id="exampleModalLabel{{ $item->id }}">
                    Edit Data Pengguna
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/Admin/Data_Admin', $item->id ) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                {{ csrf_field() }}
                <div class="modal-body" id="modal-content-edit">
                    <div class="form-group">
                        <label>Nama </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ $item->name }}" required id="ubah">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ $item->email }}" required>
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
                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<script>
    CKEDITOR.replace('ubah');
</script>