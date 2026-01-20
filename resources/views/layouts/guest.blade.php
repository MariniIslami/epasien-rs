<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'e-Pasien RS Bhayangkara')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- HEADER -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container">
            <span class="navbar-brand fw-bold">RS Bhayangkara</span>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container py-5">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="text-center text-muted py-3">
        <hr>
        <small>Kontak RS | Jam Layanan | © RS Bhayangkara</small>
    </footer>

</body>

</html>