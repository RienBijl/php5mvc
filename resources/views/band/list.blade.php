@extends('layouts.app')
@section('title', 'Bands ' . $query)

@section('content')

    <div class="container">
        <h3>Displaying bands that are <strong>{{$query}}</strong></h3>
        <hr>

        @if ($bands->isNotEmpty())

        @else
            There are no bands to display.
        @endif

        {!! $bands->links() !!}

    </div>

@endsection
