@extends('layout.master')
@section('title', 'Driver Page')
@section('content')
    <h4>
        Hello Driver {{ Auth::user()->Lastname }}
    </h4>
    

@endsection
