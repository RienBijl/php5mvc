@extends('layouts.app')
@section('title', $user->name)

@section('content')

    <div class="container">
        <h3>Welcome <strong>{{$user->name}}</strong></h3>
        <hr>

        <strong>Actions:</strong>

        <li><a href="{{ route('band.create') }}">Create band</a></li>
        <li><a href="{{ route('user.bands') }}">List bands owned by me</a></li>

    </div>

@endsection
