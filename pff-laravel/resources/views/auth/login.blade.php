@extends('layout.auth')
@section('form')
    @if ($errors->any())
        <div>
            {{ $errors }}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <div class="container mt-5">
        <form method="POST" class="card" action="/login">
            @csrf
            <div class="card-body m-5 ">
                <div class="mb-3">
                    <label for="exampleInputEmail1"  class="form-label">Email address</label>
                    <input type="email" placeholder="Email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <span>
                    @error('email'){{ $message }}@enderror
                </span>
                <div class="mb-3">
                    <label for="exampleInputPassword1"  class="form-label">Password</label>
                    <input type="password" class="form-control"name="password" placeholder="Password" id="exampleInputPassword1">
                    {{-- {{ session('err') }} --}}
                </div>
                <span>
                    @error('password'){{ $message }}@enderror
                </span>
                 <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
@endsection
