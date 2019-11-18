<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cardly: @yield('title')</title>

    <!-- Stylesheets' links -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/Header---Apple.css">
    <link rel="stylesheet" href="/assets/css/Header-Dark.css">
    <link rel="stylesheet" href="/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="/assets/css/styles.css">

    @yield('links')
</head>

<body>

    <header>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <div class="container-fluid"><a class="navbar-brand" href="/">Cardly</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;" href="#">First element</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;" href="#">Second element</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;" href="#">Third element</a></li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        @if (auth()->check())
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;" href="#">{{ auth()->user()->email }}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;" href="/logout">Logout</a></li>
                        @else
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;" href="/login">Login</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;" href="/register">Register</a></li>
                        @endif
                        <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><i class="fa fa-shopping-cart" style="color: rgb(255,255,255); font-size: 24px; padding: 8px" href="#"></i></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('body')

    <script src="assets/js/jquery.min.js"></script> <!-- JQuery -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script> <!-- Bootstrap -->
</body>

</html>
