<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sepedamotorController extends Controller
{
    public function indexsepedamotor()
    {
        $sepedamotor = DB::table('sepedamotor')->get();

        return view('indexsepedamotor',['sepedamotor'=>$sepedamotor]);
    }


	public function tambahsepedamotor()
	{

		return view('tambahsepedamotor');

	}

	public function store(Request $request)
	{

		DB::table('sepedamotor')->insert([
			'kodesepedamotor' => $request->kodesepedamotor,
			'merksepedamotor' => $request->merksepedamotor,
			'stocksepedamotor' => $request->stocksepedamotor,
			'tersedia' => $request->tersedia
		]);

		return redirect('/sepedamotor');

	}


	public function editsepedamotor($kodesepedamotor)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor',$kodesepedamotor)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editsepedamotor',['sepedamotor' => $sepedamotor]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('sepedamotor')->where('kodesepedamotor',$request->kodesepedamotor)->update([
			'merksepedamotor' => $request->merksepedamotor,
			'stocksepedamotor' => $request->stocksepedamotor,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepedamotor');
	}

	// method untuk hapus data pegawai
	public function hapus($kodesepedamotor)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sepedamotor')->where('kodesepedamotor',$kodesepedamotor)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepedamotor');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepedamotor = DB::table('sepedamotor')
		->where('merksepedamotor','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexsepedamotor',['sepedamotor' => $sepedamotor, 'cari' => $cari]);

	}

    public function viewsepedamotor($kodesepedamotor)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor',$kodesepedamotor)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewsepedamotor',['sepedamotor' => $sepedamotor]);


	}
}
