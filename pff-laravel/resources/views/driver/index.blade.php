@extends('layout.master')
@section('title', 'Driver Page')
@section('content')
<div class="">
    <h4 class=""> Bonjour Mr. {{ Auth::user()->Firstname }}</h4>
    <div class="card">
        
    </div>
</div>


@endsection
