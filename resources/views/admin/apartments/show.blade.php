@extends('layouts.app')

@section('title')
    - {{ $apartment->title }} 
@endsection

@section('content')
<div class="container">
    <h1>{{ $apartment->title }}</h1>

    <img src="{{ asset('storage/' . $apartment->cover) }}" alt="{{ $apartment->title }}">
    
    <div>
        <h3>Descrizione</h3>
        {{ $apartment->description }}
    </div>

    <h3>Altre info</h3>
    <ul>
        <li>
            Camere: {{ $apartment->rooms }}
        </li>

        <li>
            Letti: {{ $apartment->beds }}
        </li>

        <li>
            Bagni: {{ $apartment->baths }}
        </li>

        <li>
            Metri quadrati: {{ $apartment->square_meters }}
        </li>

        <li>
            Indirizzo: {{ $apartment->address }}
        </li>

        <li>
            Latitudine: {{ $apartment->latitude }}
        </li>

        <li>
            Longitudine: {{ $apartment->longitude }}
        </li>

        @if ($apartment->visible == 1)
        <li>
            Visibile: Si
        </li>
        @else
        <li>
            Visibile: No
        </li>
        @endif
    </ul>


    <a href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
        modifica
    </a>

</div>
@endsection