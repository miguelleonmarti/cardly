<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cardly: @yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets' links -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="/assets/css/Article-List.css">
    <link rel="stylesheet" href="/assets/css/Features-Blue.css">
    <link rel="stylesheet" href="/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="/assets/css/Header---Apple.css">
    <link rel="stylesheet" href="/assets/css/Header-Blue.css">
    <link rel="stylesheet" href="/assets/css/Header-Dark.css">
    <link rel="stylesheet" href="/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    @yield('links')
</head>

<body>

    <header>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <div class="container-fluid">
                <a href="/"><img class="logo" src="/assets/img/logo%20bus.png"></a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    @if(auth()->check())
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;"
                                href="#">My cards</a></li>
                        @if(auth()->user()->email == 'admin@admin.com')
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;"
                                href="/management">Management mode (only admin)</a></li>
                        @endif
                    </ul>
                    @endif
                    <ul class="nav navbar-nav ml-auto">
                        @if (auth()->check())
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;"
                                href="#">{{ auth()->user()->email }}</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;"
                                href="/logout">Logout</a></li>
                        @else
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;"
                                href="/login">Login</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" style="font-size: 18px;"
                                href="/register">Register</a></li>
                        @endif
                        <li class="nav-item d-lg-flex align-items-lg-center" data-toggle="modal"
                            data-target="#shoppingCartModal" role="presentation"><i class="fa fa-shopping-cart"
                                style="color: rgb(255,255,255); font-size: 24px; padding: 8px" href="#"></i></li>

                        <div class="modal fade" id="shoppingCartModal" tabindex="-1" role="dialog"
                            aria-labelledby="shoppingCartModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="shoppingCartModalTitle">Shopping cart</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach(Cart::content() as $cartItem)
                                                <tr>
                                                    <td>
                                                        <!-- Remove product button -->
                                                        <a href="#">x</a>
                                                    </td>
                                                    <td>{{ $cartItem->name }}</td>
                                                    <td>{{ $cartItem->qty }}</td>
                                                    <td>${{ number_format($cartItem->price, 2) }}</td>
                                                    <td>${{ number_format($cartItem->price * $cartItem->qty, 2) }}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <!-- Total price of whole cart -->
                                                    <td class="uk-text-bold">${{ number_format(Cart::subtotal(), 2) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Clear shopping cart button -->
                                        <form action="/destroy" method="POST" style="all:unset;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Empty
                                            </button>
                                        </form>

                                        <!-- Proceed to checkout button -->
                                        <a href="/checkout" class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>

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
