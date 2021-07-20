@extends('layouts.app')

@section('content')
    <h1>dettaglio appartamento</h1>

    <div><h2>{{ $apartment->title }}</h2></div>

    <a class="btn btn-primary" href="{{ route('send-message', ['id' => $apartment->id]) }}">Messaggia</a>
@endsection