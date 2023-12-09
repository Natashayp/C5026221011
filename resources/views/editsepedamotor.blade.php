@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')


	<h3>Edit Sepeda Motor</h3>

	<a href="/sepedamotor"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepedamotor as $sm)
	<form action="/sepedamotor/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="kodesepedamotor" value="{{ $sm->kodesepedamotor }}"> <br/>
        <div class="form-group row">
            <label for="merksepedamotor" class="col-sm-2 col-form-label">Merk Sepeda Motor</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" required="required" name="merksepedamotor" value="{{ $sm->merksepedamotor }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocksepedamotor" class="col-sm-2 col-form-label">Stock Sepeda Motor</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" id="stocksepedamotor" required="required" name="stocksepedamotor" value="{{ $sm->stocksepedamotor }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <input type="char" class="form-control" id="tersedia" required="required" name="tersedia" value="{{ $sm->tersedia }}">
            </div>
        </div>


		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

    @endsection


