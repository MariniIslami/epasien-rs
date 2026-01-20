<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function dashboard()
    {
        return view('pasien.dashboard');
    }

    public function formData()
    {
        return view('pasien.data');
    }

    public function simpanData(Request $request)
    {
        // simpan ke tabel pasien (database SUDAH ADA)
        return redirect('/dashboard')->with('success', 'Data pasien tersimpan');
    }
}
