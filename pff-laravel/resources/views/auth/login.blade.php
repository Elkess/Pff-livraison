@extends('layout.auth')
@section('form')

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form method="POST" action="/login">
        @csrf
        LOGIN : <input name="email" type="text" required />
        PASSWORD : <input name="password" type="text" required />
        {{ session('err') }}
        <button type="submit">Login</button>
    </form>
    @foreach ($errors as $err)
        {{ $err }}
    @endforeach
@endsection
