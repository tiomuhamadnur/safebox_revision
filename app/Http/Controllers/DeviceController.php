<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::all();
        return view('device.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('device.create');
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
        Device::create([
            'name' => $request->name,
            'token' => $token,
            'description' => $request->description,
        ]);
        return redirect('/device')->withStatus(('Data berhasil ditambahkan.'));
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
        $device = Device::find($id);
        return view('device.edit', compact(['device']));
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

        $device = Device::find($id);
        $device->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('/device')->withStatus('Data berhasil diperbaharui');
    }

    public function update_token($id)
    {
        $device = Device::find($id);
        $token = Str::random(20);
        $device->update([
            'token' => $token,
        ]);
        return redirect('/device')->withStatus(('Token berhasil diperbaharui.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $device = Device::find($id);
        $device->delete();
        return redirect('/device')->withStatus('Data berhasil dihapus');
    }
}