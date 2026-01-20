<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    // FORM DATA PASIEN
    public function create()
    {
        return view('pasien.step1');
    }

    // SIMPAN DATA PASIEN (REKAM MEDIS)
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:pasien,nik',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        Pasien::create([
            'user_id' => Auth::id(),
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()
            ->route('dashboard.pasien')
            ->with('success', 'Data pasien berhasil disimpan');
    }
}
