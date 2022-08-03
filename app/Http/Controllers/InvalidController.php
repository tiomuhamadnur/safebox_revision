<?php

namespace App\Http\Controllers;

use App\Models\Invalid;
use Illuminate\Http\Request;

class InvalidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invalid = Invalid::all();
        return view('invalid.index', compact(['invalid']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $invalid = Invalid::find($id);
        return view('pegawai.create', compact(['invalid']));
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
     * @param  \App\Models\Invalid  $invalid
     * @return \Illuminate\Http\Response
     */
    public function show(Invalid $invalid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invalid  $invalid
     * @return \Illuminate\Http\Response
     */
    public function edit(Invalid $invalid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invalid  $invalid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invalid $invalid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invalid  $invalid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invalid = Invalid::find($id);
        $invalid->delete();
        return back()->withStatus(('Data berhasil dihapus.'));
    }

    public function delete_semua()
    {
        Invalid::table('invalid')->delete();
        return back()->withStatus(('Data berhasil dihapus.'));
    }
}