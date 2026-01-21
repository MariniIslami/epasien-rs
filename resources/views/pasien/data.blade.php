@extends('layouts.app')

@section('title','Data Pasien')

@section('content')
<h5 class="mb-4">Data Pasien (Rekam Medis)</h5>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="/data-pasien">
    @csrf

    <div class="row">
        <div class="col-md-6 mb-3">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label>No. HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>

        <div class="col-md-12 mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3" required></textarea>
        </div>
    </div>

    <button class="btn btn-primary">
        Simpan Data
    </button>

</form>
@endsection