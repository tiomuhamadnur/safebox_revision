<?php

namespace App\Http\Controllers;

use App\Models\Alat;
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
        $alat_rusak = AlatRusak::all();
        return view('alat-rusak.index', compact(['alat_rusak']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alat = Alat::all();
        return view('alat-rusak.create', compact(['alat']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AlatRusak::create($request->except(['_token', 'submit']));
        return redirect('/alat-rusak')->withStatus(('Data berhasil ditambahkan.'));
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
    public function edit($id)
    {
        $alat_rusak = AlatRusak::find($id);
        return view('alat-rusak.edit', compact(['alat_rusak']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlatRusak  $alatRusak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alat_rusak = AlatRusak::find($id);
        $alat_rusak->update($request->except(['_token', 'submit']));
        return redirect('/alat-rusak')->withStatus(('Data berhasil diperbaharui.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlatRusak  $alatRusak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alat_rusak = AlatRusak::find($id);
        $alat_rusak->delete();
        return back()->withStatus(('Data berhasil dihapus.'));
    }
}