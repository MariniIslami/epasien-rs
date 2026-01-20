<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
        }
    </style>
</head>

<body>

    <div class="d-flex">

        <!-- SIDEBAR -->
        <div class="sidebar bg-primary text-white p-3">
            <h5 class="text-center mb-4">e-Pasien</h5>

            @if(auth()->user()->role == 'pasien')
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/pasien/dashboard" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Pendaftaran Poli</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Riwayat Pendaftaran</a>
                </li>
            </ul>
            @endif

            @if(auth()->user()->role == 'admin')
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Data Poli</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Data Dokter</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Pendaftaran Pasien</a>
                </li>
            </ul>
            @endif

            <hr>

            <form method="POST" action="/logout">
                @csrf
                <button class="btn btn-light w-100">Logout</button>
            </form>
        </div>

        <!-- CONTENT -->
        <div class="flex-grow-1 p-4 bg-light">
            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')
        </div>

    </div>

</body>

</html>