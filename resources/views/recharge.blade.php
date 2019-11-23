@extends('common')

@section('title', 'Recharge')

@section('body')

@if (isset($types))
@foreach ($types->chunk(3) as $chunk)
<!-- Number of rows -->

<div class="container mt-5">
    <div class="card-deck mb-3 text-center">
        @foreach ($chunk as $type)
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">{{ $type->name }}</h4>
            </div>
            <div class="card-body d-flex flex-column">
                <img src="{{ $type->image }}">
                <h1 class="card-title pricing-card-title">${{ $type->price }}<small class="text-muted">/ mes</small>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>{{ $type->description }}</li>
                </ul>
                <button type="" class="btn btn-lg btn-outline-primary btn-block align-self-end mt-auto mb-2"
                    data-toggle="modal" data-target="#cardModal{{ $type->id }}">Info</button>
                <form action="/add/{{ $type->id }}" method="POST" style="all: unset;">
                    @csrf
                    <button type="submit" class="btn btn-lg btn-outline-primary btn-block align-self-center mt-auto">Add
                        to cart</button>
                </form>
            </div>
        </div>

        <div class="modal fade" id="cardModal{{ $type->id }}" tabindex="-1" role="dialog"
            aria-labelledby="cardModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cardModalTitle">{{ $type->name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ $type->image }}">
                        <h1 class="card-title pricing-card-title">${{ $type->price }}<small class="text-muted">/
                                mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>{{ $type->description }}</li>
                        </ul>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endforeach
    @endif

    @endsection
