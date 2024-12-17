<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('indexkaryawan', ['karyawan' => $karyawan]);
    }

    public function create()
    {
        return view('createkaryawan');
    }

    public function store(Request $request)
    {

        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect('/karyawan')->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        DB::table('karyawan')->where('kodepegawai', $id)->delete();
        return redirect('/karyawan')->with('success', 'Data berhasil dihapus.');
    }
}
