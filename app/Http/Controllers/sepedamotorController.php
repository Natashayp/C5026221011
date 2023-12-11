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


	public function edit($kodemobil)
	{

		$mobil = DB::table('mobil')->where('kodemobil',$kodemobil)->get();

		return view('editmobil',['mobil' => $mobil]);

	}


	public function update(Request $request)
	{

		DB::table('mobil')->where('kodemobil',$request->kodemobil)->update([
			'merkmobil' => $request->merkmobil,
			'stockmobil' => $request->stockmobil,
			'tersedia' => $request->tersedia,
		]);

		return redirect('/mobil');
	}


	public function hapus($kodesepedamotor)
	{

		DB::table('sepedamotor')->where('kodesepedamotor',$kodesepedamotor)->delete();


		return redirect('/sepedamotor');
	}

    public function cari(Request $request)
	{

		$cari = $request->cari;


		$sepedamotor = DB::table('sepedamotor')
		->where('merksepedamotor','like',"%".$cari."%")
		->paginate();


		return view('indexsepedamotor',['sepedamotor' => $sepedamotor, 'cari' => $cari]);

	}

    public function viewsepedamotor($kodesepedamotor)
	{

		$sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor',$kodesepedamotor)->get();

		return view('viewsepedamotor',['sepedamotor' => $sepedamotor]);


	}
}
