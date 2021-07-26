@extends('layouts.app')

@section('title')
    - Modifica appartamento
@endsection

@section('content')
<div class="container-fluid edit-admin">
    <h1>Modifica Appartamento: {{ $apartment->title }}</h1>

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

    {{-- Form --}}
    <form action="{{ route('admin.apartments.update', ['apartment' => $apartment->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <input type="text" name="title" class="question" id="title" value="{{ old('title', $apartment->title) }}" required />
            <label for="title"><span>Titolo</span></label>

            {{-- <textarea name="message" rows="2" class="question" id="msg" required autocomplete="off"></textarea>
            <label for="msg"><span>What's your message?</span></label>
            <input type="submit" value="Submit!" /> --}}

            {{-- <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $apartment->title) }}" required> --}}
        </div>

        <div class="form-group description-form">
            <label class="description-label" for="description">Descrizione</label>
            <textarea type="text" name="description" class="question" id="description" required>{{ old('description', $apartment->description) }}</textarea>

            {{-- <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="10" required>{{ old('description', $apartment->description) }}</textarea> --}}
        </div>

        <div class="form-group">
            <input type="text" name="rooms" class="question" id="rooms" value="{{ old('rooms', $apartment->rooms) }}" required />
            <label for="rooms"><span>Numero di stanze</span></label>

            {{-- <label for="rooms">Numero di stanze</label>
            <input type="text" class="form-control" id="rooms" name="rooms" value="{{ old('rooms', $apartment->rooms) }}" required> --}}
        </div>

        <div class="form-group">
            <input type="text" name="beds" class="question" id="beds" value="{{ old('beds', $apartment->beds) }}" required />
            <label for="beds"><span>Numero di letti</span></label>

            {{-- <label for="beds">Numero di letti</label>
            <input type="text" class="form-control" id="beds" name="beds" value="{{ old('beds', $apartment->beds) }}" required> --}}
        </div>

        <div class="form-group">
            <input type="text" name="baths" class="question" id="baths" value="{{ old('baths', $apartment->baths) }}" required />
            <label for="baths"><span>Numero di bagni</span></label>

            {{-- <label for="baths">Numero di bagni</label>
            <input type="text" class="form-control" id="baths" name="baths" value="{{ old('baths', $apartment->baths) }}" required> --}}
        </div>

        <div class="form-group">
            <input type="text" name="square_meters" class="question" id="square_meters" value="{{ old('square_meters', $apartment->square_meters) }}" required />
            <label for="square_meters"><span>Metri quadrati</span></label>

            {{-- <label for="square_meters">Metri quadrati</label>
            <input type="text" class="form-control" id="square_meters" name="square_meters" value="{{ old('square_meters', $apartment->square_meters) }}"> --}}
        </div>

        <div class="form-group">
            <input type="text" name="price" class="question" id="price" value="{{ old('price', $apartment->price) }}" required />
            <label for="price"><span>Prezzo</span></label>

            {{-- <label for="price">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $apartment->price) }}" required> --}}
        </div>

        <div class="form-group">
            <input type="text" name="address" class="question" id="address" value="{{ old('address', $apartment->address) }}" required />
            <label for="address"><span>Indirizzo</span></label>

            {{-- <label for="address">Indirizzo</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $apartment->address) }}" required> --}}
        </div>

        <div class="form-group">
            <input type="hidden" name="latitude" class="question" id="latitude" value="{{ old('latitude', $apartment->latitude) }}" required />

            {{-- <label for="latitude">Latitudine</label>
            <input type="hidden" class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $apartment->latitude) }}" required> --}}
        </div>

        <div class="form-group">
            <input type="hidden" name="longitude" class="question" id="longitude" value="{{ old('longitude', $apartment->longitude) }}" required />

            {{-- <label for="longitude">Longitudine</label>
            <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $apartment->longitude) }}" required> --}}
        </div>

        <div class="form-group file-select">
            <input type="file" name="cover" class="question file"  id="cover" value="{{ old('cover', $apartment->cover) }}" />
            <label for="cover"><span>Immagine di copertina</span></label>

            {{-- <label for="cover">Immagine di copertina</label>
            <input type="file" class="form-control-file" name="cover" id="cover"> --}}
        </div>

        @if($apartment->cover)
        <div class="edit-cover">
            <h5>Immagine corrente</h5>
            <div>
                <img src="{{ asset('storage/' . $apartment->cover) }}" alt="{{ $apartment->title }}">
            </div>
        </div>
        @endif

        {{-- checkboxes extras  --}}
        <div class="form-group extra-service">
            <h5>Servizi Extra</h5>
            <div class="extra-checkbox">
                @foreach ($extras as $extra)
                    <div class="form-check">
                        
    

                       @if ($errors->any())
                            <div class="container-check">
                                <input type="checkbox" name="extras[]" value="{{ $extra->id }}" id="extra-{{ $extra->id }}" {{ in_array($extra->id, old('extras', [])) ? 'checked' : '' }}>
                                <label for="extra-{{ $extra->id }}">
                                    {{$extra->name}}
                                </label>
                            </div>

<<<<<<< HEAD
                            
=======

>>>>>>> ec77e76d0e45234a3d268172c777e0a7647b5a97
                        @else
                            <div class="container-check">
                                <input type="checkbox" name="extras[]" value="{{ $extra->id }}" id="extra-{{ $extra->id }}" {{ $apartment->extras->contains($extra->id) ? 'checked' : '' }}>
                                <label for="extra-{{ $extra->id }}">
                                    {{$extra->name}}
                                </label>
                            </div>

<<<<<<< HEAD
                            
=======
>>>>>>> ec77e76d0e45234a3d268172c777e0a7647b5a97
                        @endif
                        
                    </div> 
                @endforeach
            </div>
            
        </div>
        
        <div class="form-group">
            <label for="visible" class="select">Visibile tramite ricerca:</label>

            <select name="visible" id="visible">
                <option value="1" {{ old('visible', $apartment->visible) == 1 ? 'selected' : '' }}>Visibile</option>
                <option value="0" {{ old('visible', $apartment->visible) == 0 ? 'selected' : '' }}>Nascosto</option>
            </select>
        </div>
        {{-- Non ho aggiunto l'opzione per il visible, io immagino sia un button con una funzione collegata,
            ma così ad occhio e croce non saprei come implementarla, c'è un attimo da ragionarci, magari una
            checkbox con un if-else--}}

        <div class="submit">
            <input class="btn btn-success" type="submit" value="Modifica">
        </div>
    </form>
</div>
@endsection