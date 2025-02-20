@extends('layoutsadmin.app')
@section('contentadmin')

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Pegawai</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Pegawai</a></li>
                                <li class="breadcrumb-item active">Add Data Pegawai</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background-color: #efc6c6;">
                            <div class="card-header">
                                <h3 class="card-title">Form edit Data Pegawai</h3>
                                <a href="/pegawai" class="btn float-right btn-outline-warning btn-md">
                                    <li class="fa fa-undo"></li> Kembali
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <form action="{{ url('/update/pegawai/' . $pegawai->id) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control form-control-lg"
                   placeholder="Masukkan NIK" value="{{ $pegawai->nik }}" required maxlength="16">
        </div>
        <div class="col-md-6 mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-control-lg"
                   placeholder="Masukkan Nama Lengkap" value="{{ $pegawai->nama_lengkap }}" required maxlength="255">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-lg" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="laki-laki" {{ $pegawai->jenis_kelamin === 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="perempuan" {{ $pegawai->jenis_kelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control form-control-lg"
                   placeholder="Masukkan Username" value="{{ $pegawai->username }}" required maxlength="255">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control form-control-lg"
                   placeholder="Masukkan Password">
            <small class="text-muted">Kosongkan jika tidak ingin mengubah password.</small>
        </div>
        <div class="col-md-6 mb-3">
            <label for="no_telepon" class="form-label">No Telepon</label>
            <input type="text" name="no_telepon" id="no_telepon" class="form-control form-control-lg"
                   placeholder="Masukkan No Telepon" value="{{ $pegawai->no_telepon }}" required maxlength="15" pattern="[0-9]+">
        </div>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control form-control-lg"
               placeholder="Masukkan Alamat" value="{{ $pegawai->alamat }}" required maxlength="255">
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select name="role" id="role" class="form-control form-control-lg" required>
            <option value="">-- Pilih Role --</option>
            <option value="admin" {{ $pegawai->role === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="petugas" {{ $pegawai->role === 'petugas' ? 'selected' : '' }}>Petugas</option>
            <option value="masyarakat" {{ $pegawai->role === 'masyarakat' ? 'selected' : '' }}>Masyarakat</option>
        </select>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg mt-3 w-100">Simpan Perubahan</button>
    </div>
</form>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
@endsection
