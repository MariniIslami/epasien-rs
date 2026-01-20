@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Bukti Registrasi Rawat Jalan</h3>

    <table class="table table-bordered">
        <tr>
            <th>Tanggal Kunjungan</th>
            <td>{{ $data['tanggal_kunjungan'] }}</td>
        </tr>
        <tr>
            <th>Poliklinik</th>
            <td>{{ $data['poli_id'] }}</td>
        </tr>
        <tr>
            <th>Dokter</th>
            <td>{{ $data['dokter_id'] }}</td>
        </tr>
        <tr>
            <th>Jenis Pembayaran</th>
            <td>{{ $data['jenis_pembayaran'] }}</td>
        </tr>
    </table>

    <div class="alert alert-success">
        <strong>Status:</strong> Terdaftar
    </div>

    <a href="/dashboard" class="btn btn-primary">Kembali ke Dashboard</a>
</div>
@endsection