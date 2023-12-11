@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')


	<h3>Edit Mobil</h3>

	<a href="/mobil"> Kembali</a>

	<br/>
	<br/>

	@foreach($mobil as $m)
    <fieldset disabled>
	<form action="/mobil/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="kodemobil" value="{{ $m->kodemobil }}"> <br/>
        <div class="form-group row">
            <label for="merkmobil" class="col-sm-2 col-form-label">Merk Mobil</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="merkmobil" value="{{ $m->merkmobil }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockmobil" class="col-sm-2 col-form-label">Stock Mobil</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" id="stockmobil" required="required" name="stockmobil" value="{{ $m->stockmobil }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <input type="char" class="form-control" id="tersedia" required="required" name="tersedia" value="{{ $m->tersedia }}">
            </div>
        </div>


		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
    </fieldset>
	@endforeach

    @endsection


