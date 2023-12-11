@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

<h2>Data Sepeda Motor</h2>

<br>

	<a href="/sepedamotor/tambahsepedamotor" class="btn btn-primary">Tambah Sepeda Motor Baru</a>

<br>
<br>

<br/>
    <p>Cari Data Sepeda Motor :</p>
	<form action="/sepedamotor/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="ketik merk sepedamotor .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Sepeda Motor</th>
			<th>Merk Sepeda Motor</th>
			<th>Stock Sepeda Motor</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($sepedamotor as $sm)
		<tr>
			<td>{{ $sm->kodesepedamotor }}</td>
			<td>{{ $sm->merksepedamotor }}</td>
			<td>{{ $sm->stocksepedamotor }}</td>
            <td>
                 
            </td>
			<td style="text-align: center">
                @if($sm->tersedia == 'Y')
                <input type="checkbox" checked disabled>
                @elseif($sm->tersedia == 'N')
                <input type="checkbox" disabled>
                @endif
            </td>
			<td>
                <a href="/sepedamotor/viewsepedamotor/{{ $sm->kodesepedamotor }}" class=" btn btn-success">View</a>
                |
				<a href="/sepedamotor/editsepedamotor/{{ $sm->kodesepedamotor }}" class=" btn btn-warning">Edit</a>
				|
				<a href="/sepedamotor/hapus/{{ $sm->kodesepedamotor }}" class=" btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>




@endsection
