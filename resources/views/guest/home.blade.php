@extends('layouts.app')

@section('header-scripts')
    {{-- Vue.js CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
<div id="root">

    <div class="container">
        <h1>ricerca</h1>
        
        <input v-on:keyup="getAddressCoord" v-model="searchAddress" type="search" class="form-control" id="search-search-bar"  name='search'>

        <form id="form-search" action="{{route('search-page')}}" method="get">
            @csrf
            @method('GET')
            <div class="form-group">


                {{-- hidden inputs of coords, retrieved by api search to tomtom --}}
                <input type="text" name="latitude" id="latitude" v-model="lat">
                <input type="text" name="longitude" id="longitude" v-model="lon">

                <label for="radius">Inserisci il raggio di ricerca</label>
                <input type="text" name="radius" id="radius" v-model="radius">
                
                <input type="submit" id="submit-search" class="btn bnb_btn" value='Cerca'>
                
            </div>
        </form>
        
        
    </div>   

</div>

@endsection

@section('footer-scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection