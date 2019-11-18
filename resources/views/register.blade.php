@extends('common')

@section('title', 'Register')

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
        <form method="POST" action="/register">
            @csrf
            <div class="illustration">
                <i class="icon ion-person-add"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                    <input class="form-control" type="date" name="birthday" id="birthday" placeholder="Birthday" required>
                </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Sign up</button>
            </div>
            <a class="forgot" href="#">Forgot your email or password?</a>
        </form>
    </div>

@endsection
