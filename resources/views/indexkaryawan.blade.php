@extends('template')

@section('tulisan1','Karyawan')



@section('konten')
<div class="container">

    <table class="table table-striped table-hover">
        <thead>
            <tr style="text-align: center;">
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $k)
                <tr style="text-align: center;">
                    <td>{{ $k->kodepegawai }}</td>
                    <td style="text-transform: uppercase;">{{ $k->namalengkap }}</td>
                    <td>{{ $k->divisi }}</td>
                    <td>{{ $k->departemen }}</td>

                    <td>
                        <form action="/karyawan/destroy/{{ $k->kodepegawai }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/karyawan/create" class="btn btn-primary">Tambah Data</a>
    <br/>

</div>
@endsection


