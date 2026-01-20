@extends('layouts.public')

@section('title', 'e-Pasien RS Bhayangkara')

@section('content')
<div class="card shadow-sm">
    <div class="card-body p-5">
        <h2 class="text-primary fw-bold">Aplikasi e-Pasien</h2>
        <h5>RS Bhayangkara Tingkat III Hoegeng Iman Santoso Banjarmasin</h5>

        <p class="text-muted mt-3">
            Sistem pendaftaran online pasien umum poliklinik rawat jalan
        </p>

        <a href="/login" class="btn btn-primary btn-lg mt-3">
            Login Pasien
        </a>
    </div>
</div>
@endsection