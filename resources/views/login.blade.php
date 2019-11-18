@extends('common')

@section('title', 'Login')

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
    <form method="POST" action="/login">
        @csrf
        <div class="illustration">
            <i class="icon ion-ios-locked-outline"></i>
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
        </div>
        <a class="forgot" href="#">Forgot your email or password?</a>
    </form>
</div>

@endsection
