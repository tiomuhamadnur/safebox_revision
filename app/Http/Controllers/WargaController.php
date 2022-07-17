<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::all();
        return view('warga.index', compact(['warga']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Warga::create($request->except(['_token', 'submit']));
        return redirect('/warga')->withStatus(('Data berhasil ditambahkan.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('warga.edit', compact(['warga']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $warga = Warga::find($id);
        $warga->update($request->except(['_token', 'submit']));
        return redirect('/warga')->withStatus(('Data berhasil diperbaharui.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warga = Warga::find($id);
        $warga->delete();
        return back()->withStatus(('Data berhasil dihapus.'));
    }
}