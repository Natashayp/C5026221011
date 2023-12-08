@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
<br>

<div class="row">
<div class="col-8">
	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="SKS" name="SKS">
                </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
</div>
@endsection




