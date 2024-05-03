@extends('layout.master')
@section('title','Vehicles')

@section('content')
<x-nav-bar/>
<h2>Vehicles</h2>
<ul> 
    <li>
        {{ ($driver->Firstname) }}
    </li>
    <li>
        {{ ($driver->Lastname) }}
    </li>
    <li>
         Vehicle : {{ $driver->vehicle }}
    </li>
</ul>

@endsection