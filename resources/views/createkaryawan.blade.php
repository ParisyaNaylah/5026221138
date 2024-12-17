@extends('template')

@section('tulisan1', 'Karyawan')

@section('link1')
    <a href="/karyawan">Kembali</a>
@endsection

@section('konten')
    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class="row mb-3">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="kodepegawai" name="kodepegawai" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="divisi" name="divisi" required>
            </div>
        </div>

        <div class="row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="departemen" name="departemen" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
    </form>
@endsection
