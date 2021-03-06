@extends('common')

@section('title', 'Recharge')

@section('links')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

@endsection

@section('body')

@if (isset($types))

<div class="container mt-5">
    <div class="dropdown">
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenu"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by:
            <span class="sr-only">Toggle Dropdown</span>
        </button>

        <div class="dropdown-menu" aria-labelledby="dropdownMenu">
            <a class="dropdown-item" href="/recharge/price/asc">Price: Low to High</a>
            <a class="dropdown-item" href="/recharge/price/desc">Price: High to Low</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/recharge/created_at/asc">Newest Arrivals</a>
            <a class="dropdown-item" href="/recharge/created_at/desc">Oldest Arrivals</a>
        </div>

    </div>
</div>

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
                    @if ($type->quantity > 1)
                    <li>Only <strong>{{ $type->quantity }} items left in stock.</strong></li>
                    @else
                    @if ($type->quantity == 1)
                    <li>Only <strong>1</strong> left in stock.</li>
                    @else
                    <li><strong>No cards in stock.</strong></li>
                    @endif
                    @endif

                    <li>{{ $type->description }}</li>
                </ul>

                <button type="" class="btn btn-lg btn-outline-primary btn-block align-self-end mt-auto mb-2"
                    data-toggle="modal" data-target="#cardModal{{ $type->id }}">Info</button>
                @if ($type->quantity > 0)
                <form action="/add/{{ $type->id }}" method="POST" style="all: unset;">
                    @csrf
                    <button type="submit" class="btn btn-lg btn-outline-primary btn-block align-self-center mt-auto">Add
                        to cart</button>
                </form>
                @else
                <button type="submit" class="btn btn-lg btn-outline-primary btn-block align-self-center mt-auto"
                    disabled>Add
                    to cart</button>
                @endif
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
