@extends('layouts.app')

@section('header-scripts')
    {{-- Vue.js CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <script src="https://unpkg.com/vue"></script>
<script src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
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
        
    </div>
    <section class="green-sec" v-if="searchResult.length">
        <div class="container">

            {{-- Filters --}}
            <div id="search-result" class="filters">
                <h2>Migliora la tua ricerca</h2>


                {{-- <div class="number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                    <input class="quantity" min="0" max="5" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                </div> --}}

                {{-- Beds --}}
                <div class="input-filters">
                    <div class="number-input">
                        
                        <label for="beds">Posti letto</label>

                        <div class="button-plus-min">
                            <i v-on:click="beds--" class="far fa-minus-square meno"></i>
                                <b-form-input class="quantity" id="beds" v-model="beds" min="1" max="20" name="quantity" type="number"></b-form-input>
                            <i v-on:click="beds++" class="far fa-plus-square più"></i>
                        </div>    
                    </div>


                    {{-- <div>
                        <label for="beds">Posti letto</label>
                        <input type="number" id="beds" v-model="beds" min="1" max="20">
                    </div> --}}
        
                    {{-- Rooms --}}
                    <div class="number-input">
                        <label for="rooms">Numero Stanze </label> 
                        
                        <div class="button-plus-min">
                            <i v-on:click="rooms--" class="far fa-minus-square meno"></i>
                                <b-form-input class="quantity" id="rooms" v-model="rooms" min="1" max="20" name="quantity" type="number"></b-form-input>
                            <i v-on:click="rooms++" class="far fa-plus-square più"></i>
                        </div>

                    </div>
                    
                    {{-- Radius --}}
                    <div class="number-input">
                        <label for="mod-radius">Raggio di ricerca</label>
                        <div class="button-plus-min">
                            <input type="number" class="quantity" id="mod-radius" v-model="radius"  min="5" max="100" name="quantity" type="number" v-on:change="getSearchResult">
                            <span>km</span>
                        </div>
                    </div>
                </div>
    
                {{-- Chechboxes  --}}
                <div class="filter-check">
                    <div class="form-check" v-for="extra in extras">
                        {{-- <input class="form-check-input" name="extras[]" type="checkbox" value="@{{ extra.id }}" id="extra-@{{ extra.id }}" v-on:change="getCheckboxValue( extra.id )">
                        <label class="form-check-label" for="extra-@{{ extra.id }}">
                            @{{ extra.name }}
                        </label> --}}
                        
                        <div class="container-check">
                            <input type="checkbox" name="extras[]" :value="extra.id" :id="'extra-' + extra.id" v-on:change="getCheckboxValue( extra.id )" checked>
                            <label :for="'extra-' + extra.id ">
                                @{{ extra.name }}
                            </label>
                            
                        </div>
                    </div> 
                </div>

                <div class="filter-btn">
                    <a v-on:click="filter()" class="myButton">Filtra</a>
                    {{-- <button class="btn btn-outline-secondary" v-on:click="filter()">Filtra</button> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="white-sec">
        <div class="container">
            <h2>I nostri appartamenti</h2>
    

                {{-- Apartment List --}}
                <div class="list-apartment" v-if="searchResult.length">
                    <div class="card-container" v-if="!filteredList.length">  
                        <div class="card" 
                        v-bind:style="{ backgroundImage: 'url('+ 'storage/' + ap.cover +  ')' }"
                        v-for="ap in searchResult">
                            <div>
                                <div class="details hidden centered">
                                    <a :href="'http://127.0.0.1:8000/apartments/' + ap.id ">
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

                    
                    <div class="card-container" v-else>  
                        <div class="card" 
                        v-bind:style="{ backgroundImage: 'url('+ 'storage/' + ap.cover +  ')' }"
                        v-for="ap in filteredList">
                            <div>
                                <div class="details hidden centered">
                                    <a :href="'http://127.0.0.1:8000/apartments/' + ap.id ">
                                        <i class="far fa-eye"></i> <br> Dettagli appartamento
                                    </a>
                                </div>
        
                                <div class="scaling-block">
                                    <div class="blog-title">
                                        <h5>@{{ap.title}}</h5>
        
                                        <div>@{{ ap.address }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            

            <div v-else>
               <h2> Scopri i nostri appartamenti</h2>
                {{-- TODO: aggiungere un qualcosa per identificare le card degli appartamenti sponsorizzati --}}
                @foreach ($sponsored as $apartment)
                <div class="list-apartment">
                    <div class="card-container">  
                        <div class="card" style="background-image: url('{{ asset('storage/' . $apartment->cover) }}')">
    
                            <div class="details hidden centered">
                                <a href="{{route('ap-details', ['id' => $apartment->id])}}">
                                    <i class="far fa-eye"></i> <br> Dettagli appartamento
                                </a>
                            </div>
    
                            <div class="scaling-block">
                                <div class="blog-title">
                                    <h4>{{$apartment->title}}</h4>
    
                                    <div>{{ $apartment->address }}</div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
        
       
</div>
@endsection

@section('header-scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection