@extends('common')

@section('title', 'Management')

@section('body')

@if (auth()->check() && auth()->user()->email == 'admin@admin.com')

<div class="container mt-5">

    <div class="text-center">
        <header class="border rounded">
            <h3>Users list</h3>
        </header>
        <section>
            @if (isset($users))
            @foreach ($users as $user)
            <article class="border rounded border-dark" style="margin-bottom: 10px;">
                <header>
                    <form action="/user/{{ $user->id }}" method="POST" style="all:unset;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger border rounded float-right" type="submit">
                            <i class="material-icons d-xl-flex justify-content-xl-center"
                                style="color: rgb(255,255,255);">delete</i>
                        </button>
                    </form>
                </header>
                <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Name: {{ $user->name }}</p>
                <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Email: {{ $user->email }}<br></p>
            </article>
            @endforeach
            @endif
        </section>
    </div>

    <div class="text-center">
        <header class="border rounded">
            <h3>Types list</h3>
        </header>
        <section>
            @if (isset($types))
            @foreach ($types as $type)
            <article class="border rounded border-dark" style="margin-bottom: 10px;">
                <header>
                    <form action="/type/{{ $type->id }}" method="POST" style="all:unset;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger border rounded float-right" type="submit">
                            <i class="material-icons d-xl-flex justify-content-xl-center"
                                style="color: rgb(255,255,255);">delete</i>
                        </button>
                    </form>
                    <form action="/type/{{ $type->id }}" method="POST" style="all:unset;">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-primary border rounded float-right" type="submit">
                            <i class="material-icons d-xl-flex justify-content-xl-center"
                                style="color: rgb(255,255,255);">update</i>
                        </button>
                    </form>
                </header>
                <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Name: {{ $type->name }}</p>
                <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Price: ${{ $type->price }}</p>
                <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Description: {{ $type->description }}<br>
                </p>
            </article>
            @endforeach
            @endif
        </section>
    </div>

    <div class="d-xl-flex text-center">
        <form action="/type" class="text-center border rounded" method="POST" id="form">
            @csrf
            <h4>New Type</h4>
            <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="Name"
                    required>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="auto" id="description" name="description" placeholder="Description..."
                    required></textarea>
            </div>
            <div class="form-group">
                    <input class="form-control" type="number" min="0" max="2147483647" id="quantity" name="quantity" placeholder="Quantity..."
                        required></input>
                </div>
            <div class="form-group">
                <input class="form-control" type="number" min="0" max="2147483647" step="0.01" id="price" name="price" placeholder="Price" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="image" name="image" placeholder="Image"
                    required>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary btn-block" type="submit">Add new Card Type</button>
                <button class="btn btn-primary btn-block" type="submit">Cancel</button>
            </div>
        </form>
    </div>

    <div class="text-center">
        <header class="border rounded">
            <h3>Suggestions list</h3>
        </header>
        <section>
            @if (isset($suggestions))
            @foreach ($suggestions as $suggestion)
            <article class="border rounded border-dark" style="margin-bottom: 10px;">
                <header>
                    <form action="/suggestion/{{ $suggestion->id }}" method="POST" style="all:unset;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger border rounded float-right" type="submit">
                            <i class="material-icons d-xl-flex justify-content-xl-center"
                                style="color: rgb(255,255,255);">delete</i>
                        </button>
                    </form>
                </header>
                <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Name: {{ $suggestion->name }}</p>
                <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Email: {{ $suggestion->email }}</p>
                <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Message: {{ $suggestion->message }}<br>
                </p>
            </article>
            @endforeach
            @endif
        </section>
    </div>

</div>

@endif

@endsection
