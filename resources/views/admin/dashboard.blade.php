@extends('layouts.sidebar')

@section('title', 'Dashboard Admin')

@section('page-title', 'Dashboard Admin')
@section('page-desc', 'Halaman utama administrator')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        Selamat datang, <strong>{{ auth()->user()->nama }}</strong>.
        <br>
        Gunakan menu di samping untuk mengelola sistem e-Pasien.
    </div>
</div>
@endsection