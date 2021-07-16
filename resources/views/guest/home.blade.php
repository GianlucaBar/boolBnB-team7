@extends('layouts.app')

@section('header-scripts')
    {{-- Vue.js CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection


{{-- Jumbotron --}}
@section('guest-homepage')
<div id="root">
    <div class="container-home">
        <div class="my-jumbotron">
            <div class="container">
                <div class="title">
                    <h2>dove vuoi andare?</h2>
                </div>
                
                {{-- Radius --}}
                <div class="form-group">
                    <input v-on:keyup="getAddressCoord" v-model="searchAddress" type="search" class="form-control" id="search-search-bar"  name='search'>
                    <label for="radius">Inserisci il raggio di ricerca</label>
                    <input type="hidden" name="radius" id="radius" v-model="radius">
                    
                    <button class="btn btn-primary" v-on:click="getSearchResult">
                        Cerca
                    </button>

                    {{-- Non eliminare, lo useremo per far balzare subito la pagina alla ricerca dopo averla effettuata.
                        È un po' macchinoso con Laravel, ce lo teniamo per la fine --}}
                    {{-- <a href="#search-results" class="btn btn-primary" v-on:click="getSearchResult">Cerca</a> --}}
                </div>
            </div>
        </div>
        
        <div class="container">

            {{-- Filters --}}
            <div id="search-result" v-if="searchResult.length">
                <h2>filtri</h2>
                
                <label for="beds">Numero min. posti letto</label>
                <input type="number" id="beds" v-model="beds" min="1" max="20">
    
                <label for="rooms">Numero min. stanze</label>
                <input type="number" id="rooms" v-model="rooms" min="1" max="20">
    
                <label for="mod-radius">Modifica il raggio di ricerca</label>
                <input type="number" id="mod-radius" v-model="radius" min="5" max="100" v-on:change="getSearchResult">
    
                {{-- Chechboxes  --}}
                <div class="form-check" v-for="extra in extras">
                    <input class="form-check-input" name="extras[]" type="checkbox" value="@{{ extra.id }}" id="extra-@{{ extra.id }}" v-on:change="getCheckboxValue( extra.id )">
                    <label class="form-check-label" for="extra-@{{ extra.id }}">
                        @{{ extra.name }}
                    </label>
                </div> 
                <button class="btn btn-primary" v-on:click="filter">Filtra</button>


                {{-- Apartment List --}}
                <div class="list-apartment" v-if="searchResult.length">
                    <div class="card-container">  
                        <div class="card" 
                        style="background-color: rgb(85, 190, 231)" 
                        v-for="ap in filter()">
                            <div>
                            
                                <div class="details hidden centered">
                                    <a  href="#">
                                        <i class="far fa-eye"></i> <br> Dettagli appartamento
                                    </a>
                                </div>
        
                                <div class="scaling-block">
                                    <div class="blog-title">
                                        <h4>@{{ap.title}}</h4>
        
                                        <div>@{{ ap.address }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-else>
                Nessun risultato trovato
            </div>
        </div>
    </div>   
</div>
@endsection

@section('header-scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection