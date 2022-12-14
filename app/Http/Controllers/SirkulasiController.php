<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Pegawai;
use App\Models\Sirkulasi;
use Illuminate\Http\Request;

class SirkulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sirkulasi = Sirkulasi::get();
        return view('sirkulasi.index', compact(['sirkulasi']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sirkulasi  $sirkulasi
     * @return \Illuminate\Http\Response
     */
    public function show(Sirkulasi $sirkulasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sirkulasi  $sirkulasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sirkulasi $sirkulasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sirkulasi  $sirkulasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sirkulasi $sirkulasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sirkulasi  $sirkulasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sirkulasi $sirkulasi)
    {
        //
    }
}