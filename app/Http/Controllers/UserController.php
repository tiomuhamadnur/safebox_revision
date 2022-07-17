<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('users.users', compact(['users']));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'image|file|max:1024',
            'password' => 'required'
        ]);

        $image = $request->image->store('profil-images');

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/users')->withStatus('Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact(['user']));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->withStatus('Data berhasil dihapus');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'image|file|max:1024',
            'password' => 'required'
        ]);

        $image = $request->image->store('profil-images');

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/users')->withStatus('Data berhasil diperbaharui');
    }
}