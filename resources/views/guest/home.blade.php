@extends('layouts.app')

@section('header-scripts')
    {{-- Vue.js CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
<div id="root">

    <div class="container">
        <h1>ricerca</h1>
        {{-- <input v-model="searchAddress" type="text" v-on:keyup="getAddressCoord"> --}}


        
        <div class="form-group" v-if="!searchResult.length">
            
            <input v-on:keyup="getAddressCoord" v-model="searchAddress" type="search" class="form-control" id="search-search-bar"  name='search'>


            {{-- hidden inputs of coords, retrieved by api search to tomtom --}}
            <input type="hidden" name="latitude" id="latitude" v-model="lat">
            <input type="hidden" name="longitude" id="longitude" v-model="lon">

            <label for="radius">Inserisci il raggio di ricerca</label>
            <input type="hidden" name="radius" id="radius" v-model="radius">
            
            <button class="btn btn-primary" v-on:click="getSearchResult">Cerca</button>
            
        </div>

        <div v-for="ap in searchResult">
            <div class="card">
                {{-- <img class="card-img-top" src="" alt=""> --}}
                <div class="card-body">
                  <h5 class="card-title">@{{ap.title}}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Mostra dettaglio</a>
                </div>
            </div>
        </div>
        
    </div>   

</div>

@endsection

@section('header-scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection