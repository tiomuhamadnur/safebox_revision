<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application = Application::all();
        return view('application.index', compact('application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('application.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = Str::random(20);
        Application::create([
            'name' => $request->name,
            'token' => $token,
            'description' => $request->description,
        ]);
        return redirect('/application')->withStatus(('Data berhasil ditambahkan.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::find($id);
        return view('application.edit', compact(['application']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $application = Application::find($id);
        $application->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('/application')->withStatus('Data berhasil diperbaharui');
    }

    public function update_token($id)
    {
        $application = Application::find($id);
        $token = Str::random(20);
        $application->update([
            'token' => $token,
        ]);
        return redirect('/application')->withStatus(('Token berhasil diperbaharui.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();
        return redirect('/application')->withStatus('Data berhasil dihapus');
    }
}