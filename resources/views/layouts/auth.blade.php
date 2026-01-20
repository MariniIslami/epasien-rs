<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="col-md-4">
            @yield('content')
        </div>
    </div>

</body>

</html>