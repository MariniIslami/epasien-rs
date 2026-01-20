<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function step1()
    {
        return view('pasien.step1');
    }

    public function postStep1(Request $request)
    {
        session(['tanggal' => $request->tanggal]);
        return redirect('/daftar/step-2');
    }

    public function step2()
    {
        return view('pasien.step2');
    }

    public function postStep2(Request $request)
    {
        session(['poli' => $request->poli]);
        return redirect('/daftar/step-3');
    }

    public function step3()
    {
        return view('pasien.step3');
    }

    public function postStep3(Request $request)
    {
        session(['dokter' => $request->dokter]);
        return redirect('/daftar/step-4');
    }

    public function step4()
    {
        return view('pasien.step4');
    }

    public function simpan(Request $request)
    {
        // simpan pendaftaran ke database
        return redirect('/daftar/bukti');
    }

    public function bukti()
    {
        return view('pasien.bukti');
    }
}
