@extends('common')

@section('title', 'Balance')

@section('links')

@endsection

@section('body')

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    function getMessage() {
        $.ajax({
            type:'POST',
            url:'/balance',
            data:{'_token' : '{{ csrf_token() }}', 'id' : $('#id').val()},
            contentType: 'application/json',
            dataType: 'JSON',
            success: function(data) {
                console.log(data);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>

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
    <form method="POST" onSubmit="JavaScript:getMessage()">
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
        @if (isset($balance) && isset($id))
        <div>
            Card balance with {{ $id }} identifier: ${{ $balance }}
        </div>
        @endif
    </form>
</div>

@endsection
