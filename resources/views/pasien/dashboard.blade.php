@extends('layouts.app')

@section('title','Dashboard Pasien')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<h5 class="mb-4">
    Selamat Datang, <strong>{{ auth()->user()->name }}</strong>
</h5>

<div class="row g-4">

    <!-- Data Pasien -->
    <div class="col-md-3">
        <a href="/data-pasien" class="text-decoration-none text-dark">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <h6 class="fw-bold">Lengkapi Data Pasien</h6>
                    <p class="text-muted small">
                        Isi data rekam medis pasien
                    </p>
                </div>
            </div>
        </a>
    </div>

    <!-- Daftar Rawat Jalan -->
    <div class="col-md-3">
        <a href="/daftar/step-1" class="text-decoration-none text-dark">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <h6 class="fw-bold">Daftar Rawat Jalan</h6>
                    <p class="text-muted small">
                        Pendaftaran poliklinik
                    </p>
                </div>
            </div>
        </a>
    </div>

    <!-- Riwayat -->
    <div class="col-md-3">
        <a href="#" class="text-decoration-none text-dark">
            <div class="card shadow-sm h-100 text-center">
                <div class="card-body">
                    <h6 class="fw-bold">Riwayat Pendaftaran</h6>
                    <p class="text-muted small">
                        Lihat riwayat kunjungan
                    </p>
                </div>
            </div>
        </a>
    </div>

    <!-- Logout -->
    <div class="col-md-3">
        <a href="/logout" class="text-decoration-none text-dark">
            <div class="card shadow-sm h-100 text-center border-danger">
                <div class="card-body">
                    <h6 class="fw-bold text-danger">Logout</h6>
                    <p class="text-muted small">
                        Keluar dari aplikasi
                    </p>
                </div>
            </div>
        </a>
    </div>

</div>
@endsection