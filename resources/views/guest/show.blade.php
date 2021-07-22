@extends('layouts.app')
@section('header-scripts')
    <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.14.0/maps/maps.css'/>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.14.0/maps/maps-web.min.js'></script>

@endsection

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

    <div id='map'></div>
    </div>
@endsection

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
