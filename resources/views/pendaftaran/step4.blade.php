@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Pendaftaran Rawat Jalan</h3>
    <p>Step 4 dari 4 — Pembayaran</p>

    <form method="POST" action="/pendaftaran/step-4">
        @csrf

        <div class="mb-3">
            <label>Jenis Pembayaran</label><br>
            <input type="radio" name="jenis_pembayaran" value="tunai" required> Tunai <br>
            <input type="radio" name="jenis_pembayaran" value="asuransi"> Asuransi
        </div>

        <div class="mb-3">
            <label>Asuransi (jika ada)</label>
            <select name="asuransi_id" class="form-control">
                <option value="">-- Pilih Asuransi --</option>
                @foreach($asuransi as $a)
                <option value="{{ $a->id }}">{{ $a->nama_asuransi }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Nomor Kartu Asuransi</label>
            <input type="text" name="no_kartu" class="form-control">
        </div>

        <button class="btn btn-success">Simpan & Daftar</button>
    </form>
</div>
@endsection