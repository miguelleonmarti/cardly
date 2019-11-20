@extends('common')

@section('title', 'Index')

@section('body')

<div class="features-boxed">
    <div class="container">
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
                        class="learn-more" href="#">Continuar »</a>
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
                        class="learn-more" href="#">Continuar »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-4 item">
                <div class="box"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">La MetroGuagua</h3>
                    <p class="description">La alternativa más sostenible, económica y respetuosa con el medio ambiente.
                    </p><a class="learn-more" href="#">Continuar »</a>
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
    </div>
</div>

@endsection
