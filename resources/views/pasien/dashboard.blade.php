@extends('layouts.sidebar')

@section('title', 'Dashboard Pasien')

@section('page-title', 'Dashboard Pasien')
@section('page-desc', 'Halaman utama pasien')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        Selamat datang, <strong>{{ auth()->user()->nama }}</strong> 👋
        <br>
        Silakan lakukan pendaftaran poli rawat jalan melalui menu di samping.
    </div>
</div>
@endsection