@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('content')
<div id="root">

    <div class="container">
        <h1>ricerca</h1>
        <input v-model="searchAddress" type="text" @keyup.enter="getAddressCoord">


        {{-- <form id="form-search" action="{{route('api.search')}}" method="get">
            @csrf
            @method('GET')
            <div class="form-group">
                
                <input type="search" class="form-control" id="search-search-bar"  name='search' value="">
                <input type="submit" id="submit-search" class="btn bnb_btn" value='Cerca'>

                {{-- hidden inputs of coords, retrieved by api search to tomtom --}}
                {{-- <input type="hidden" name="latitude" id="latitude" value="">
                <input type="hidden" name="longitude" id="longitude" value =""> --}}
              
            {{-- </div> --}}
        {{-- </form> --}} 
    </div>   

</div>

@endsection

@section('header-scripts')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection