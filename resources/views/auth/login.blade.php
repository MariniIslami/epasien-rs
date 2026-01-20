@extends('layouts.guest')

@section('title','Login Pasien')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-header text-center">
                <h5>Login Pasien</h5>
            </div>

            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form method="POST" action="/login">
                    @csrf

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button class="btn btn-primary w-100">
                        Login
                    </button>
                </form>

                <div class="text-center mt-3">
                    <a href="/register">Daftar Akun Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection