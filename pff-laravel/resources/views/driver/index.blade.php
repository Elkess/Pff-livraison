@extends('layout.master')
@section('title', 'Driver Page')
@section('content')
<div class="">
    <h4 class=""> Bonjour Mr. {{ Auth::user()->Lastname }}</h4>
</div>


@endsection
