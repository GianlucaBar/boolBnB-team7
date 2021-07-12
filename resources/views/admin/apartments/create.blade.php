@extends('layouts.app')

@section('content')

    {{-- Script for errors --}}
    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
    @endif

<div class="container">
    <h1>Aggiungi un nuovo appartamento</h1>
    <form action="{{ route('admin.apartments.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="10">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="rooms">Numero di stanze</label>
            <input type="text" class="form-control" id="rooms" name="rooms" value="{{ old('rooms') }}">
        </div>

        <div class="form-group">
            <label for="beds">Numero di letti</label>
            <input type="text" class="form-control" id="beds" name="beds" value="{{ old('beds') }}">
        </div>

        <div class="form-group">
            <label for="baths">Numero di bagni</label>
            <input type="text" class="form-control" id="baths" name="baths" value="{{ old('baths') }}">
        </div>

        <div class="form-group">
            <label for="square_meters">Metri quadrati</label>
            <input type="text" class="form-control" id="square_meters" name="square_meters" value="{{ old('square_meters') }}">
        </div>

        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>

        <div class="form-group">
            <label for="address">Indirizzo</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
        </div>

        <div class="form-group">
            <label for="latitude">Latitudine</label>
            <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}">
        </div>

        <div class="form-group">
            <label for="longitude">Longitudine</label>
            <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude') }}">
        </div>

        <div class="form-group">
            <label for="cover">Immagine di copertina</label>
            <input type="file" class="form-control-file" name="cover" id="cover">
        </div>

        {{-- checkboxes extras  --}}
        <div class="form-group">
            <h5>Servizi extra</h5>
            
            @foreach ($extras as $extra)
            <div class="form-check">
                <input class="form-check-input" name="extras[]" type="checkbox" value="{{ $extra->id }}" id="extra-{{ $extra->id }}" {{ in_array($extra->id, old('extras', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="extra-{{ $extra->id }}">
                    {{$extra->name}}
                </label>
            </div> 
            @endforeach
        </div>

        {{-- Non ho aggiunto l'opzione per il visible, io immagino sia un button con una funzione collegata,
            ma così ad occhio e croce non saprei come implementarla, c'è un attimo da ragionarci, magari una
            checkbox con un if-else--}}

        <input class="btn btn-success" type="submit" value="Aggiungi">
    </form>
</div>
@endsection