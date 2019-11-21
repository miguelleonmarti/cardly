@extends('common')

@section('title', 'Management')

@section('body')

@if (auth()->check() && auth()->user()->email == 'admin@admin.com')

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
            </header>
            <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Name: {{ $type->name }}</p>
            <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Price: ${{ $type->price }}</p>
            <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Description: {{ $type->description }}<br></p>
        </article>
        @endforeach
        @endif
    </section>
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
            <p class="text-left" style="margin: 10px;margin-bottom: 10px;">Message: {{ $suggestion->message }}<br></p>
        </article>
        @endforeach
        @endif
    </section>
</div>

@endif

@endsection
