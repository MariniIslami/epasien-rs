<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard e-Pasien')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <span class="navbar-brand">e-Pasien RS Bhayangkara</span>
            <a href="/logout" class="btn btn-light btn-sm">Logout</a>
        </div>
    </nav>

    <div class="container my-4">
        @yield('content')
    </div>

</body>

</html>