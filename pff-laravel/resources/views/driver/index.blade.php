@extends('layout.master')
@section('title','Driver Page')
@section('content')
<x-nav-bar/>
    Hello  {{ Auth::user()->Lastname }}
   
@endsection