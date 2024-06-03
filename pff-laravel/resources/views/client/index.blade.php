@extends('layout.master')
@section('title','Dashbord')
@section('content')
    <x-ClientNavbar/>
Hello  {{ auth()->user()->Firstname }}
@endsection