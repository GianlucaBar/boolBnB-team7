@extends('layouts.app')

@section('header-scripts')
    {{-- Vue.js CDN --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection


@section('guest-homepage')
<div id="root">

    <div class="container-home">
    <div class="my-jumbotron">
        <div class="container">
            <div class="title">
                <h2>dove vuoi andare?</h2>
            <div>
            {{-- <input v-model="searchAddress" type="text" v-on:keyup="getAddressCoord"> --}}


            
            {{-- <div class="form-group" v-if="!searchResult.length"> --}}
                
                {{-- <input v-on:keyup="getAddressCoord" v-model="searchAddress" type="search" class="form-control" id="search-search-bar"  name='search'> --}}


                {{-- hidden inputs of coords, retrieved by api search to tomtom --}}
                {{-- <input type="hidden" name="latitude" id="latitude" v-model="lat">
                <input type="hidden" name="longitude" id="longitude" v-model="lon">

                <label for="radius">Inserisci il raggio di ricerca</label>
                <input type="hidden" name="radius" id="radius" v-model="radius">
                
                <button class="btn btn-primary" v-on:click="getSearchResult">Cerca</button>
                
            </div>--}}
        </div> 
    </div>
{{--     
        <div v-for="ap in searchResult">
            <div class="card"> --}}
                {{-- <img class="card-img-top" src="" alt=""> --}}
                {{-- <div class="card-body">
                  <h5 class="card-title">@{{ap.title}}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Mostra dettaglio</a>
                </div>
            </div> --}}
        </div>
    </div>

    

</div>
@endsection

@section('list-apartment')
<div class="container">
    <div class="list-apartment">
        <div class="title-page">
            <h1>Lista Appartamenti</h1>
        </div>

        <div class="card-container">
           
                <div class="card" style="background-color: blue">
                    <div>
                    
                        <div class="details hidden centered">
                            <a  href="#">
                                <i class="far fa-eye"></i> <br> Dettagli appartamento
                            </a>
                        </div>

                        <div class="scaling-block">
                            <div class="blog-title">
                                <h4>Titolo appartamento</h4>
                                
                                

                            </div>
                        </div>

                        {{-- <div class="hidden">
                            <a class="btn btn-secondary" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                                Modifica appartamento
                            </a>
                        </div> --}}

                        {{-- <form class="hidden" action="{{ route('admin.apartments.destroy', [
                            'apartment' => $apartment->id
                            ]) }} "method="post">
                        
                            @csrf
                            @method('DELETE')
                            
                            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="elimina">
                        </form> --}}

                    </div>
                </div>

                {{-- COPIED CARD --}}
                <div class="card" style="background-color: blue">
                    <div>
                    
                        <div class="details hidden centered">
                            <a  href="#">
                                <i class="far fa-eye"></i> <br> Dettagli appartamento
                            </a>
                        </div>

                        <div class="scaling-block">
                            <div class="blog-title">
                                <h4>Titolo appartamento</h4>
                                
                                

                            </div>
                        </div>

                        {{-- <div class="hidden">
                            <a class="btn btn-secondary" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                                Modifica appartamento
                            </a>
                        </div> --}}

                        {{-- <form class="hidden" action="{{ route('admin.apartments.destroy', [
                            'apartment' => $apartment->id
                            ]) }} "method="post">
                        
                            @csrf
                            @method('DELETE')
                            
                            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="elimina">
                        </form> --}}

                    </div>
                </div>

                <div class="card" style="background-color: blue">
                    <div>
                    
                        <div class="details hidden centered">
                            <a  href="#">
                                <i class="far fa-eye"></i> <br> Dettagli appartamento
                            </a>
                        </div>

                        <div class="scaling-block">
                            <div class="blog-title">
                                <h4>Titolo appartamento</h4>
                                
                                

                            </div>
                        </div>

                        {{-- <div class="hidden">
                            <a class="btn btn-secondary" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                                Modifica appartamento
                            </a>
                        </div> --}}

                        {{-- <form class="hidden" action="{{ route('admin.apartments.destroy', [
                            'apartment' => $apartment->id
                            ]) }} "method="post">
                        
                            @csrf
                            @method('DELETE')
                            
                            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="elimina">
                        </form> --}}

                    </div>
                </div>
        </div>

    </div>
@endsection


    {{-- <div class="card-container">
            @foreach ($apartments as $apartment)
                <div class="card" style="background-image: url('{{ asset('storage/' . $apartment->cover) }}')">
                    <div>
                    
                        <div class="details hidden centered">
                            <a  href="{{ route('admin.apartments.show', ['apartment' => $apartment->id]) }}">
                                <i class="far fa-eye"></i> <br> Dettagli appartamento
                            </a>
                        </div>

                        <div class="scaling-block">
                            <div class="blog-title">
                                <h4>{{ $apartment->title }}</h4>
                                <a class="modified" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                                    Modifica appartamento
                                </a>
                                <span></span>

                            </div>
                        </div>

                        {{-- <div class="hidden">
                            <a class="btn btn-secondary" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                                Modifica appartamento
                            </a>
                        </div> --}}

                        {{-- <form class="hidden" action="{{ route('admin.apartments.destroy', [
                            'apartment' => $apartment->id
                            ]) }} "method="post">
                        
                            @csrf
                            @method('DELETE')
                            
                            <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="elimina">
                        </form> --}}

                    {{--</div>
                </div>
            @endforeach
        </div> --}}




@section('header-scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection