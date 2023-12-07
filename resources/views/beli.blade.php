@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
<br>

<div class="row">
<div class="col-8">
	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="Kode" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Kode" name="Kode">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Harga per item</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Harga" name="Harga">
                </div>
        </div>
        {{-- <div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="Total" name="Total"></textarea>
                </div>
        </div>
 --}}




        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
</div>
@endsection




