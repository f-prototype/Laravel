@extends('layout')
@section('content')
    <p>Name: {{$contact['name']}}</p>
    <p>Adress: {{$contact['adress']}}</p>
    <p>Phone: {{$contact['phone']}}</p>
    <p>Email: {{$contact['email']}}</p>
@endsection