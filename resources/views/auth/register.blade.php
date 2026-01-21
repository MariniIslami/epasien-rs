@extends('layouts.guest')

@section('title','Daftar Akun Pasien')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header text-center">
                <h5 class="mb-0">Daftar Akun Pasien</h5>
            </div>

            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="/register">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama"
                            class="form-control"
                            value="{{ old('nama') }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Daftar
                    </button>
                </form>

                <div class="text-center mt-3">
                    <a href="/login">Sudah punya akun? Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection