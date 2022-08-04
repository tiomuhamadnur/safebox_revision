<?php

namespace App\Http\Controllers;

use App\Models\AlatRusak;
use Illuminate\Http\Request;

class AlatRusakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $alat_rusak = AlatRusak::all();
        // return view('alat-rusak.index', compact(['alat_rusak']));
        return view('alat-rusak.index');
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
     * @param  \App\Models\AlatRusak  $alatRusak
     * @return \Illuminate\Http\Response
     */
    public function show(AlatRusak $alatRusak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlatRusak  $alatRusak
     * @return \Illuminate\Http\Response
     */
    public function edit(AlatRusak $alatRusak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlatRusak  $alatRusak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlatRusak $alatRusak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlatRusak  $alatRusak
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlatRusak $alatRusak)
    {
        //
    }
}