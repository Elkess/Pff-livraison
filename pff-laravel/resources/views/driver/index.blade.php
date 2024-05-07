@extends('layout.master')
@section('title', 'Driver Page')
@section('content')
    <h4>
        Hello Driver {{ Auth::user()->Lastname }}
    </h4>
    <h2>Latest Deliveries</h2>
    

@endsection
