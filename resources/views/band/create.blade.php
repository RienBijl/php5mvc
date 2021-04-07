@extends('layouts.app')
@section('title', 'Create band')

@section('content')

    <div class="container">
        <h3>Create a new band</h3>
        <hr>

        <form action="{{ route('band.create') }}" method="POST">
            @method('post')
            @csrf

            <label for="name">Name</label>
            <input autofocus type="text" name="name" id="name" class="form-control">

            <label for="description">Description</label>
            <input type="text" name="name" id="name" class="form-control">

            <label for="biography">Biography</label>
            <textarea name="biography" id="biography" class="form-control"></textarea>

            <br>
            <input type="submit" class="btn btn-primary">
        </form>

    </div>

@endsection
