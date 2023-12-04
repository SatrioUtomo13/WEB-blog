@extends('layouts.main')

@section('content')
    <h1>ini about</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200" class="rounded-md shadow-md">
@endsection
