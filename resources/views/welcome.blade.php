@extends('layouts.guest')

@section('title','Welcome')

@section('content')
<div class="row align-items-center">
    <div class="col-md-6">
        <h3 class="fw-bold">Aplikasi e-Pasien Rawat Jalan</h3>
        <p class="text-muted">
            Pendaftaran Online Poliklinik Rawat Jalan
        </p>

        <ul>
            <li>Daftar Akun</li>
            <li>Login</li>
            <li>Daftar Poliklinik</li>
            <li>Bukti Registrasi</li>
        </ul>

        <a href="/register" class="btn btn-primary me-2">
            Daftar Pasien Baru
        </a>
        <a href="/login" class="btn btn-outline-secondary">
            Login Pasien
        </a>
    </div>

    <div class="col-md-6 text-center">
        <img
            src="https://cdn-icons-png.flaticon.com/512/2966/2966486.png"
            width="250"
            alt="Ilustrasi RS">
    </div>
</div>
@endsection