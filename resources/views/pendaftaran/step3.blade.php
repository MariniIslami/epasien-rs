@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Pendaftaran Rawat Jalan</h3>
    <p>Step 3 dari 4 — Pilih Dokter</p>

    <form method="POST" action="/pendaftaran/step-3">
        @csrf

        <div class="mb-3">
            <label>Dokter Spesialis</label>
            <select name="dokter_id" class="form-control" required>
                <option value="">-- Pilih Dokter --</option>
                @foreach($dokters as $dokter)
                <option value="{{ $dokter->id }}">
                    {{ $dokter->nama_dokter }}
                </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Lanjutkan</button>
    </form>
</div>
@endsection