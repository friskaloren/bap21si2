<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use PDF; //ini yang ditambahkan di configurasi dari config-app (sesuaiin huruf besar kecilnya)

class laporanMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // matu ambil atau tarik data mahasiswa
        $mahasiswa = mahasiswa::all(); //sama sperti select * from mahasiswa trus dbconnect dsb
        return view ('laporan/mahasiswa',['mahasiswa'=>$mahasiswa,]);
    }

    public function cetak_pdf()
    {
        $mahasiswa = mahasiswa::all();
        $pdf = PDF::loadview('laporan/mahasiswapdf',['mahasiswa'=>$mahasiswa]);
        return $pdf->download('laporan-mahasiswa-pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
