@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
<div id="root">

    <div class="container">
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
    <script src="{{ asset('js/search-filters.js') }}"></script>
@endsection