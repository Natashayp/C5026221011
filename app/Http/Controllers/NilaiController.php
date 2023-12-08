<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function indexNilai()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();

        return view('indexNilai',['nilaikuliah'=>$nilaikuliah]);
    }

    public function tambahNilai()
	{

		// memanggil view beli
		return view('tambahNilai');

	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'ID' => $request->ID,
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}

}


