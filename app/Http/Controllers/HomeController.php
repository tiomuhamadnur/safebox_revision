<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\AlatRusak;
use App\Models\Invalid;
use App\Models\Pegawai;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        $alat = Alat::all();
        $alat_rusak = AlatRusak::all();
        $invalid = Invalid::all();
        return view('pages.dashboard', compact(['pegawai', 'alat', 'alat_rusak', 'invalid']));
    }
}