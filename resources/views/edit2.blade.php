@extends('template')
@section('tulisan1','Data Bedak')

@section('link1')
    <a href="/bedak"> Kembali</a>
@endsection

@section('konten')
	@foreach($bedak as $p)
	<form action="/bedak/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodebedak }}"> <br/>
        <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merk" class="form-control" id="merk" required="required" value="{{ $p->merkbedak }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="number" name="stock" class="form-control" id="stock" required="required" value="{{ $p->stockbedak }}">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10" >
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
	</form>
	@endforeach
@endsection

