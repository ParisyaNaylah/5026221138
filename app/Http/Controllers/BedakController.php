<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BedakController extends Controller
{
    public function index2()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //hasilnya array 2D
        $bedak = DB::table('bedak')->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('index2',['bedak' => $bedak]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah2()
    {

	// memanggil view tambah
	return view('tambah2');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('bedak')->insert([
		'merkbedak' => $request->merk,
		'stockbedak' => $request->stock,
		'tersedia' => $request->stock > 0 ? 1 : 0
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/bedak');

    }

    public function edit2($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
    // SELECT * FROM pegawai WHERE pegawai_id = x
	$bedak = DB::table('bedak')->where('kodebedak','=',$id)->get();
    // mengambil data dari table pegawai, tanpa filtering
    //$pegawai = DB::table('pegawai')->get(); //hasilnya array 2D
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit2',['bedak' => $bedak]);

    }

    // update data pegawai
    public function update(Request $request)
    {
	// update data pegawai
	DB::table('bedak')->where('kodebedak',$request->id)->update([
		'merkbedak' => $request->merk,
		'stockbedak' => $request->stock,
		'tersedia' => $request->stock > 0 ? 1 : 0
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/bedak');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('bedak')->where('kodebedak',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/bedak');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$bedak = DB::table('bedak')
		->where('merkbedak','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index2',['bedak' => $bedak]);

	}
}
