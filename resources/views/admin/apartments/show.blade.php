@extends('layouts.app')

@section('header-scripts')
    <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.14.0/maps/maps.css'/>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.14.0/maps/maps-web.min.js'></script>

@endsection
@section('title')
    - {{ $apartment->title }} 
@endsection

@section('show')
<div class="show-container">
    <div class="container-fluid">

        {{-- Title --}}
        <div class="show-title">
            <h1>{{ $apartment->title }}</h1>
            {{ $apartment->address }}
        </div>

        {{-- Img part --}}
        <div class="show-img">
            <img src="{{ asset('storage/' . $apartment->cover) }}" alt="{{ $apartment->title }}">
        </div>

        {{-- Call to Action Link --}}
        <div class="calltoaction-link ">
            <a class="btn" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                Modifica informazioni <i class="fas fa-wrench"></i>
            </a>
        </div>
        
        {{-- Flex Container --}}
        <div class="show-flex-container">
            {{-- Info part --}}
            <div class="show-info">
                <div>
                    <h3>Descrizione</h3>
                    <p>
                        {{ $apartment->description }}
                    </p>
                </div>

                {{-- TomTom Map --}}
                <div id='map'></div>
            </div>

            {{-- Other info --}}
            <div class="info-ul">
                <h3>Informazioni</h3>
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

        @if ($apartment->visible == 1)
        <li>
            <span class="strong-text">Visibile:</span> Si
        </li>
        @else
        <li>
            <span class="strong-text">Visibile:</span> No
        </li>
        @endif
    </ul>

                {{-- Extras --}}
                <div class="extras">
                    <h3>Extra</h3>
                    @foreach ($extras as $extra)
                    {{-- TODO: Mettere qualcosa se non ci sono extra.
                        A me non vanno le funzioni che penso dovrebbero andare--}}
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

{{-- Footer Scripts --}}
@section('footer-scripts')
<script>
    let coordinates = [{{$apartment->longitude}}, {{$apartment->latitude}}]
    var map = tt.map({
        container: 'map',
        key: 'HgVrAuAcCtAcxTpt0Vt2SyvAcoFKqF4Z',
        center: coordinates,
        zoom: 15
    });

    var marker = new tt.Marker().setLngLat(coordinates).addTo(map);
</script>
@endsection