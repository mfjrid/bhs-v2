<!DOCTYPE html>
<html lang="en" data-bs-theme="bhs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') &mdash; BHS</title>

    <link href="{{ url('/') }}/dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/dist/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/css/style.css" rel="stylesheet">
    @stack('styles')
</head>

<body>
    @yield('content')

    <script src="{{ url('/') }}/dist/bootstrap/js/bootstrap.bundle.min.js"></script>
    @stack('script')
</body>

</html>
