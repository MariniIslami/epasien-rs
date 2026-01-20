<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container vh-100 d-flex align-items-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-9 text-center">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>