<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;
use App\Models\Dokter;
use App\Models\Asuransi;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    // =====================
    // STEP 1: TANGGAL KUNJUNGAN
    // =====================
    public function step1()
    {
        return view('pendaftaran.step1');
    }

    public function storeStep1(Request $request)
    {
        $request->validate([
            'tanggal_kunjungan' => 'required|date'
        ]);

        session([
            'pendaftaran.tanggal_kunjungan' => $request->tanggal_kunjungan
        ]);

        return redirect('/pendaftaran/step-2');
    }

    // =====================
    // STEP 2: PILIH POLI
    // =====================
    public function step2()
    {
        $polis = Poli::all();
        return view('pendaftaran.step2', compact('polis'));
    }

    public function storeStep2(Request $request)
    {
        $request->validate([
            'poli_id' => 'required'
        ]);

        session([
            'pendaftaran.poli_id' => $request->poli_id
        ]);

        return redirect('/pendaftaran/step-3');
    }

    // =====================
    // STEP 3: PILIH DOKTER
    // =====================
    public function step3()
    {
        $dokters = Dokter::where(
            'poli_id',
            session('pendaftaran.poli_id')
        )->get();

        return view('pendaftaran.step3', compact('dokters'));
    }

    public function storeStep3(Request $request)
    {
        $request->validate([
            'dokter_id' => 'required'
        ]);

        session([
            'pendaftaran.dokter_id' => $request->dokter_id
        ]);

        return redirect('/pendaftaran/step-4');
    }

    // =====================
    // STEP 4: PEMBAYARAN
    // =====================
    public function step4()
    {
        $asuransi = Asuransi::all();
        return view('pendaftaran.step4', compact('asuransi'));
    }

    public function storeStep4(Request $request)
    {
        $request->validate([
            'jenis_pembayaran' => 'required'
        ]);

        session([
            'pendaftaran.jenis_pembayaran' => $request->jenis_pembayaran,
            'pendaftaran.asuransi_id' => $request->asuransi_id,
            'pendaftaran.no_kartu' => $request->no_kartu,
        ]);

        return redirect('/pendaftaran/bukti');
    }

    // =====================
    // STEP FINAL: BUKTI REGISTRASI
    // =====================
    public function konfirmasi()
    {
        $data = session('pendaftaran');

        return view('pendaftaran.bukti', compact('data'));
    }
}
