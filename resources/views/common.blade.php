<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cardly: @yield('title')</title>

    <!-- Stylesheets' links -->

    @yield('links')
</head>

<body>

    @yield('body')

    <script src="assets/js/jquery.min.js"></script> <!-- JQuery -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script> <!-- Bootstrap -->
</body>

</html>
