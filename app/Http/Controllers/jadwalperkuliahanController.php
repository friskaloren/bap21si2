<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalperkuliahan;


class jadwalperkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jadwalperkuliahans = jadwalperkuliahan::where('id','>',0)->get();
        return view('jadwalperkuliahan')->with('jadwalperkuliahans',$jadwalperkuliahans);

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
