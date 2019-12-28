@extends('common')

@section('title', 'Index')

@section('body')

<div class="features-boxed">
    <div class="container pb-5">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-warning" uk-alert>
            {{ Session::get('error') }}
            @php
            Session::forget('error');
            @endphp
        </div>
        @endif

        <div class="intro">
            <h2 class="text-center">Cardly</h2>
        </div>
        <div class="row justify-content-center features">
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-credit-card icon"></i>
                    <h3 class="name">Recargar de bonos</h3>
                    <p class="description">Aquí podremos recargar el saldo de los distintos bonos de los que dispongamos
                    </p><a class="learn-more" href="/recharge">Continuar »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Horarios</h3>
                    <p class="description">Consulta los horarios de las distintas líneas disponibles en tu parada</p><a
                        class="learn-more" href="/schedule">Continuar »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="la la-money icon"></i>
                    <h3 class="name">Saldo de tarjeta</h3>
                    <p class="description">Consulta de saldo en nuestros distintos bonos de transporte.</p><a
                        class="learn-more" href="/balance">Continuar »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fas fa-hand-holding-heart icon"></i>
                    <h3 class="name">Seguridad-Vial</h3>
                    <p class="description">Conoce las normas del correcto uso del transporte público.</p><a
                        class="learn-more" href="/safety">Continuar »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">La MetroGuagua</h3>
                    <p class="description">La alternativa más sostenible, económica y respetuosa con el medio ambiente.
                    </p><a class="learn-more" href="/metroguagua">Continuar »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Contáctanos</h3>
                    <p class="description">Ante cualquier o sugerencia, contacta con nuestros especialistas.&nbsp;</p><a
                        class="learn-more" href="/suggestion">Continuar »</a>
                </div>
            </div>
        </div>

        <div class="intro">
            <h2 class="text-center">Find the nearest shop</h2>
        </div>
        <div id="map" style="height: 400px; margin: 0px; padding: 0px;"></div>

        <script type="text/javascript">
            function initMap() {
                let centerCoords = {lat: 28.071354, lng: -15.453343};
                let map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 18,
                    center: centerCoords
                });
                let locations = [
                    ['Aparcamiento EITE', 28.07079, -15.455199],
                    ['Aparcamiento Arquitectura', 28.072064, -15.454503],
                    ['Administración EITE', 28.070926, -15.454135],
                    ['Pabellón C', 28.071351, -15.453103]
                ];

                var infowindow = new google.maps.InfoWindow();

                var marker, i;

                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            }
        </script>
        <script type="text/javascript" async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzMVSIxzXgj3iGzWEeCaT_l1CA7QQQyPU&callback=initMap">
        </script>

        <div class="intro">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="row justify-content-center mt-3">

            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block"
                        src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-15/e35/74933229_466611187316410_8509106887671519394_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_cat=110&_nc_ohc=MzJBchiIIoAAX930aiN&se=7&oh=fec221e526a06a2a8e1116b5afdcdf85&oe=5E8EB5C3&ig_cache_key=MjE5MTU5Nzk5ODc1MjkwOTM2Ng%3D%3D.2">
                    <div class="card-body info">
                        <h4 class="card-title">Miguel Á. León Martí</h4>
                        <p class="card-text">Alumno del Grado en Tecnologías de la Telecomunicación de la Universidad de
                            Las Palmas de Gran Canaria.</p>
                        <a class="btn-floating btn-lg btn-git" style="font-size: 40px;" type="button" role="button"
                            href="https://github.com/miguelleonmarti"><i class="fab fa-github"></i></a>
                        <a class="btn-floating btn-lg btn-ins" style="font-size: 40px;" type="button" role="button"
                            href="https://www.instagram.com/willyrex/"><i class="fab fa-instagram"></i></a>
                        <a class="btn-floating btn-lg btn-tw" style="font-size: 40px;" type="button" role="button"
                            href="https://twitter.com/WillyrexYT"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center"><img
                        style="-moz-transform: scaleX(-1); -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1); filter: FlipH;"
                        class="card-img-top w-100 d-block"
                        src="https://scontent-sjc3-1.cdninstagram.com/v/t51.2885-15/e35/74933229_466611187316410_8509106887671519394_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com&_nc_cat=110&_nc_ohc=MzJBchiIIoAAX930aiN&se=7&oh=fec221e526a06a2a8e1116b5afdcdf85&oe=5E8EB5C3&ig_cache_key=MjE5MTU5Nzk5ODc1MjkwOTM2Ng%3D%3D.2">
                    <div class="card-body info">
                        <h4 class="card-title">Erik Martrus Guillén</h4>
                        <p class="card-text">Alumno del Grado en Tecnologías de la Telecomunicación de la Universidad de
                            Las Palmas de Gran Canaria.</p>
                        <a class="btn-floating btn-lg btn-git" style="font-size: 40px;" type="button" role="button"
                            href="https://github.com/ErikMartrus"><i class="fab fa-github"></i></a>
                        <a class="btn-floating btn-lg btn-ins" style="font-size: 40px;" type="button" role="button"
                            href="https://www.instagram.com/willyrex/"><i class="fab fa-instagram"></i></a>
                        <a class="btn-floating btn-lg btn-tw" style="font-size: 40px;" type="button" role="button"
                            href="https://twitter.com/WillyrexYT"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
