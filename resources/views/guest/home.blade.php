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
        <div class="my-jumbotron" style="background-image:url('{{asset('img/milano.jpg')}}')">
            <div class="overlay">
                <div class="title">
                    <h2>Dove vuoi andare?</h2>
                </div>
                
                {{-- Radius --}}
                <div class="form-group">
                    <input v-on:keyup="getAddressCoord" v-model="searchAddress" type="search" class="form-control" id="search-search-bar"  name='search'>
                    {{-- <label for="radius">Inserisci il raggio di ricerca</label>
                    <input type="hidden" name="radius" id="radius" v-model="radius"> --}}
                    
                     {{-- BTN-BLOB --}}
                     <div class="buttons">
                        <button class="blob-btn"  v-on:click="getSearchResult">
                          Inizia Ricerca
                          <span class="blob-btn__inner">
                            <span class="blob-btn__blobs">
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                              <span class="blob-btn__blob"></span>
                            </span>
                          </span>
                        </button>
                        <br/>
                     </div>
                      
                      
                    {{-- END BTN-BLOB --}}
                    
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
                <div class="input-filters">
                    <label for="beds">Posti letto</label>
                    <input type="number" id="beds" v-model="beds" min="1" max="20">
        
                    <label for="rooms">Numero Stanze</label>
                    <input type="number" id="rooms" v-model="rooms" min="1" max="20">
        
                    <label for="mod-radius">Raggio di ricerca</label>
                    <input type="number" id="mod-radius" v-model="radius" min="5" max="100" v-on:change="getSearchResult">
                </div>
                {{-- Chechboxes  --}}
                <div class="filter-check">
                    <div class="form-check" v-for="extra in extras">
                        <input class="form-check-input" name="extras[]" type="checkbox" value="@{{ extra.id }}" id="extra-@{{ extra.id }}" v-on:change="getCheckboxValue( extra.id )">
                        <label class="form-check-label" for="extra-@{{ extra.id }}">
                            @{{ extra.name }}
                        </label>
                    </div> 
                </div>

                <button class="btn btn-primary" v-on:click="filter">Filtra</button>


                {{-- Apartment List --}}
                <div class="list-apartment" v-if="searchResult.length">
                    <div class="card-container">  
                        <div class="card" 
                        style="background-image: url('../public/storage/apartments_covers/ap.jpg')" 
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
                Scopri i nostri appartamenti
            </div>
        </div>
    </div>   
</div>
@endsection

@section('header-scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection