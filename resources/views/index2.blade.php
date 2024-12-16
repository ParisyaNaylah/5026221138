<!DOCTYPE html>
@extends('template')
@section('tulisan1','Data Bedak')

@section('link1')
    <a href="/bedak/tambah" class="btn btn-primary"> + Tambah Bedak Baru</a>
@endsection

@section('konten')

	<br/>
	<form action="/bedak/cari" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Merk Bedak :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Bedak .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
            </div>
        </div>
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($bedak as $p)
		<tr>
			<td>{{ $p->merkbedak }}</td>
			<td>{{ $p->stockbedak }}</td>
			<td>
                @if ($p->tersedia === 'Y')
                    <i class="fa-solid fa-check text-success"></i>
                @else
                    <i class="fa-solid fa-check text-success"></i>
                @endif
            </td>
			<td>
				<a href="/bedak/edit/{{ $p->kodebedak }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/bedak/hapus/{{ $p->kodebedak }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $bedak->currentPage() }} <br/>
	Jumlah Data : {{ $bedak->total() }} <br/>
	Data Per Halaman : {{ $bedak->perPage() }} <br/>


	{{ $bedak->links() }}


@endsection
