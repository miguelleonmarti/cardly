@extends('common')

@section('title', 'Balance')

@section('body')

@if ($errors->any())
<div class="alert alert-danger" style="margin: 0;">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="login-dark">
    <form method="POST" action="/balance">
        @csrf
        <div class="illustration">
            <i class="la la-money icon"></i>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="id" id="id" placeholder="Card identifier" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Consult</button>
        </div>
    </form>
</div>

@endsection
