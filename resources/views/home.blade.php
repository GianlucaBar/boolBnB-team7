@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
<div id="root">

    <div class="container">
        <h1>ricerca</h1>
        {{-- <input v-model="searchAddress" type="text" v-on:keyup="getAddressCoord"> --}}


        <div class="form-group">
            
            <input v-on:keyup="getAddressCoord" v-model="searchAddress" type="search" class="form-control" id="search-search-bar"  name='search'>


            {{-- hidden inputs of coords, retrieved by api search to tomtom --}}
            <input type="text" name="latitude" id="latitude" v-model="lat">
            <input type="text" name="longitude" id="longitude" v-model="lon">

            <label for="radius">Inserisci il raggio di ricerca</label>
            <input type="text" name="radius" id="radius" v-model="radius">
            <button class="btn btn-primary" v-on:click="getSearchResult">Cerca</button>
            
        </div> 
    </div>   

</div>

@endsection

@section('header-scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection