@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

<h2>Data Mobil</h2>

<br>

	<a href="/mobil/tambah" class="btn btn-primary">Tambah Mobil Baru</a>

<br>
<br>

<br/>
    <p>Cari Data Mobil :</p>
	<form action="/mobil/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="ketik merk mobil .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br>
		<input type="submit" value="cari" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Mobil</th>
			<th>Merk Mobil</th>
			<th>Stock Mobil</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($mobil as $m)
		<tr>
			<td>{{ $m->kodemobil }}</td>
			<td>{{ $m->merkmobil }}</td>
			<td>{{ $m->stockmobil }}</td>
			<td style="text-align: center">
                @if($m->tersedia == 'Y')
                <input type="checkbox" checked disabled>
                @elseif($m->tersedia == 'N')
                <input type="checkbox" disabled>
                @endif
            </td>
			<td>
                <a href="/mobil/view/{{ $m->kodemobil }}" class=" btn btn-success">View</a>
                |
				<a href="/mobil/edit/{{ $m->kodemobil }}" class=" btn btn-warning">Edit</a>
				|
				<a href="/mobil/hapus/{{ $m->kodemobil }}" class=" btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>




@endsection
