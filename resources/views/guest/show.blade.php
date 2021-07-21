@extends('layouts.app')

@section('title')
    - {{ $apartment->title }} 
@endsection

@section('content')
    <div class="container">
        <h1>Dettaglio appartamento</h1>

    <div>
        <h2>
            {{ $apartment->title }}
        </h2>

        {{-- TODO: Completare la pagina --}}
    </div>

    <a class="btn btn-primary" href="{{ route('send-message', ['id' => $apartment->id]) }}">Contatta il proprietario</a>
    </div>
@endsection