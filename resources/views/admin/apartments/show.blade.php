@extends('layouts.app')

@section('title')
    - {{ $apartment->title }} 
@endsection

@section('show')
<div class="show-container">
    <div class="container">
        <div class="show-title">
            <h1>{{ $apartment->title }}</h1>
            {{ $apartment->address }}
        </div>

        {{-- Img part --}}
        <div class="show-img">
            <img src="{{ asset('storage/' . $apartment->cover) }}" alt="{{ $apartment->title }}">
        </div>

        <div class="calltoaction-link ">
            <a class="btn" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                Modifica informazioni
            </a>
        </div>
        
        <div class="show-flex-container">
            {{-- Info part --}}
            <div class="show-info">
                <div>
                    <h3>Descrizione</h3>
                    <p>
                        {{ $apartment->description }}
                    </p>
                </div>
            </div>

            <div class="info-ul">
                <h3>Altre info</h3>
                <ul>
                    <li>
                        <span class="strong-text">Camere:</span> {{ $apartment->rooms }}
                    </li>

                    <li>
                        <span class="strong-text">Letti:</span> {{ $apartment->beds }}
                    </li>

                    <li>
                        <span class="strong-text">Bagni:</span> {{ $apartment->baths }}
                    </li>

                    <li>
                        <span class="strong-text">Metri quadrati:</span> {{ $apartment->square_meters }}
                    </li>

                    <li>
                        <span class="strong-text">Latitudine:</span> {{ $apartment->latitude }}
                    </li>

                    <li>
                        <span class="strong-text">Longitudine:</span> {{ $apartment->longitude }}
                    </li>

                    <li>
                        <span class="strong-text">Slug:</span> {{ $apartment->slug }}
                    </li>
                </ul>

                <div class="extras">
                    <h3>Extra</h3>
                    @foreach ($extras as $extra)
                        {{-- @if($extra->name->isEmpty())
                            Nessun extra
                            @else --}}

                            @if(!$loop->last)
                            {{ Str::ucfirst($extra->name) }} -
                            @endif

                            @if($loop->last)
                                {{ Str::ucfirst($extra->name) }}
                            @endif
                        
                        {{-- @endif --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection