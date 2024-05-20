@extends('layout.master')
@section('title','Dashbord')
@section('content')
    <x-nav-bar/>
Hello  {{ auth()->user()->Firstname }}
@endsection