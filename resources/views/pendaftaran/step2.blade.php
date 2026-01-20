@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Pendaftaran Rawat Jalan</h3>
    <p>Step 1 dari 4 — Pilih Tanggal Kunjungan</p>

    <form method="POST" action="/pendaftaran/step-1">
        @csrf

        <div class="mb-3">
            <label>Tanggal Kunjungan</label>
            <input type="date" name="tanggal_kunjungan" class="form-control" required>
        </div>

        <button class="btn btn-primary">Lanjutkan</button>
    </form>
</div>
@endsection