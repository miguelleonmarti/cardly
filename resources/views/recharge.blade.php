@extends('common')

@section('title', 'Recharge')

@section('body')

@if (isset($types))
@foreach ($types->chunk(3) as $chunk) <!-- Number of rows -->

<div class="container mt-5">
  <div class="card-deck mb-3 text-center">
    @foreach ($chunk as $type)
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">{{ $type->name }}</h4>
      </div>
      <div class="card-body d-flex flex-column">
      <img src="{{ $type->image }}">
        <h1 class="card-title pricing-card-title">${{ $type->price }}<small class="text-muted">/ mes</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>{{ $type->description }}</li>
        </ul>
        <form action="/add/{{ $type->id }}" method="POST" style="all: unset;">
            @csrf
            <button type="submit" class="btn btn-lg btn-outline-primary btn-block align-self-center mt-auto">Add to cart</button>

        </form>
      </div>
    </div>
    @endforeach
  </div>

  @endforeach
  @endif

@endsection
