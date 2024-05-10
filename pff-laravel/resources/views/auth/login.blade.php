@extends('layout.auth')
@section('form')
<div class="container mt-5">
    <form method="POST" class="card" action="/login">
            @csrf
            <div class="card-body m-5 ">
                 
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" placeholder="Email" name="email"class="form-control" >
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <span>
                </span>
                <div class="mb-3">
                    <label   class="form-label">Password </label>
                    <input type="password" class="form-control"name="password" placeholder="Password">
                    @error('password')
                        <span class=" text-danger ">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="mb-3 form-check">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
@endsection
