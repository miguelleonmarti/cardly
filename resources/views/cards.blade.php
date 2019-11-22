@extends('common')

@section('title', 'My cards')

@section('body')

@if(isset($cards))
@foreach ($cards as $card)
<p>Balance: {{ $card->balance }}</p>
<p>Bought at: {{ $card->created_at }}</p>
<p>Last used: {{ $card->updated_at }}</p>
<p>Type: {{ App\Type::find($card->type_id)->name }}</p>
<hr />
@endforeach
@endif

@endsection
