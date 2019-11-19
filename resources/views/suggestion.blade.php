@extends('common')

@section('title', 'Suggestion')

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
    <form method="POST" action="/suggestion">
        @csrf
        <div class="illustration">
            <i class="icon ion-help"></i>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="name" id="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="auto" style="resize: none;" name="message" id="message" placeholder="Message..." required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Send</button>
        </div>
    </form>
</div>

@endsection
