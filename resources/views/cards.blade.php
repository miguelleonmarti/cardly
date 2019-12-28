@extends('common')

@section('title', 'My cards')

@section('body')

@if(isset($cards) && $cards->count() != 0)

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    <strong>The cards you have bought</strong>
                </div>
                <div class="card-body">
                    @foreach ($cards as $card)
                    <div class="card">
                        <div class="row">
                            <div class="col d-flex align-items-center justify-content-center">
                                <img src="{{ App\Type::find($card->type_id)->image }}" alt="">
                            </div>
                            <div class="col">
                                <table class="table text-white bg-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">Concept</th>
                                            <th scope="col">Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Identifier</th>
                                            <td>{{ $card->id }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Balance</th>
                                            <td>{{ $card->balance }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Bought at</th>
                                            <td>{{ $card->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Last used</th>
                                            <td>{{ $card->updated_at }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Type</th>
                                            <td>{{ App\Type::find($card->type_id)->name }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@else

<h3>You have not bought any card yet.</h3>

@endif

@endsection
