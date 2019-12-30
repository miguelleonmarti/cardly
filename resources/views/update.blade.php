@extends('common')

@section('title', 'Update Type')

@section('body')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="d-xl-flex login-dark" id="newChannelDiv">
    <form action="/type/{{ $type->id }}" class="text-center border rounded" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input class="form-control" type="text" id="name" name="name" value="{{ $type->name }}" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="auto" id="description" name="description"
                required>{{ $type->description }}</textarea>
        </div>
        <div class="form-group">
            <input class="form-control" min="0" type="number" id="quantity" name="quantity"
                value="{{ $type->quantity }}" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" min="0" max="2147483647" step="0.01" id="price" name="price" value="{{ $type->price }}" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="image" name="image" value="{{ $type->image }}" required>
        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary btn-block" type="submit">Update</button>
            <button class="btn btn-secondary btn-block" type="reset">Reset</button>
        </div>
    </form>
</div>

@endsection
