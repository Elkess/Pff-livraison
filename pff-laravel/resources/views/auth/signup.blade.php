@extends('layout.auth')
@section('form')
    <div class="container mt-5">
        {{ $errors }}
        <h2 class="text-center">Sign in</h2>
        <form class="card" method="POST" action="/signup">
            @csrf
            <div class="card-body">
                FIRST NAME :<input class="form-control" name="firstname" type="text" />
                @error('firstname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                LAST NAME :<input class="form-control" name="lastname" type="text" />
                @error('lastname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                ADDRESS :<input class="form-control" name="address" type="text" />
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                PHONE NUMBER : <input class="form-control" name="phone" type="number" required />
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                EMAIL : <input class="form-control" name="email" type="text" required />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                PASSWORD : <input class="form-control " name="password" type="password" type="text" required />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary " type="submit">Sign in</button>
        </form>
    </div>
@endsection
