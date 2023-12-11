@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

	<br/>


<div class="row">
<div class="col-8">
	<form action="/mobil/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkmobil" class="col-sm-2 col-form-label">Merk Mobil</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="merkmobil" name="merkmobil">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockmobil" class="col-sm-2 col-form-label">Stock Mobil</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="stockmobil" name="stockmobil">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tersedia" name="tersedia" placeholder="Y=Tersedia or N=Tidak Terseedia">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
</div>
@endsection




