@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $apartment->title }}</h1>

    <img src="{{ asset('storage/' . $apartment->cover) }}" alt="{{ $apartment->title }}">
    <p>Informazioni da aggungere, questo è un test, ma il collegamento funziona</p>

    {{-- {{ dd($apartment)}} --}}


    <a href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
        modifica
    </a>

</div>
@endsection