@extends('layouts.with_logged_in')
@section('contents')
    <h1>User Detail | <small>{{ $user->name }}</small></h1>
    <hr>

    <h3>Name: {{ $user->name }}</h3><br>
    <h3>Email: {{ $user->email }}</h3><br>
    <h3>User Type: {{ $user->type }}</h3><br>
@endsection
