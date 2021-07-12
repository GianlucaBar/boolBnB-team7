@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica post: {{ $apartment->title }}</h1>
<form action="{{ route('admin.apartments.update', ['apartment' => $apartment->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $apartment->title) }}">
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="10">{{ old('description', $apartment->description) }}</textarea>
    </div>

    <div class="form-group">
        <label for="rooms">Numero di stanze</label>
        <input type="text" class="form-control" id="rooms" name="rooms" value="{{ old('rooms', $apartment->rooms) }}">
    </div>

    <div class="form-group">
        <label for="beds">Numero di letti</label>
        <input type="text" class="form-control" id="beds" name="beds" value="{{ old('beds', $apartment->beds) }}">
    </div>

    <div class="form-group">
        <label for="baths">Numero di bagni</label>
        <input type="text" class="form-control" id="baths" name="baths" value="{{ old('baths', $apartment->baths) }}">
    </div>

    <div class="form-group">
        <label for="square_meters">Metri quadrati</label>
        <input type="text" class="form-control" id="square_meters" name="square_meters" value="{{ old('square_meters', $apartment->square_meters) }}">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $apartment->price) }}">
    </div>

    <div class="form-group">
        <label for="address">Indirizzo</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $apartment->address) }}">
    </div>

    <div class="form-group">
        <label for="latitude">Latitudine</label>
        <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $apartment->latitude) }}">
    </div>

    <div class="form-group">
        <label for="longitude">Longitudine</label>
        <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $apartment->longitude) }}">
    </div>

    <div class="form-group">
        <label for="cover">Immagine di copertina</label>
        <input type="file" class="form-control-file" name="cover" id="cover">
    </div>

    @if($apartment->cover)
        <h5>Immagine corrente</h5>
        <div>
            <img src="{{ asset('storage/' . $apartment->cover) }}" alt="{{ $apartment->title }}">
        </div>
    @endif

    {{-- checkboxes extras  --}}
    <div class="form-group">
        <h5>Servizi extra</h5>
        
        @foreach ($extras as $extra)
            <div class="form-check">

                {{-- Se ci sono errori nell'invio del form uso la validazione fatta con create, siccome mi mantiene bene ciò che ho selezionato
                anche in caso di refresh in seguito a errori. Quella di edit invece, contenuta in @else, funziona bene solo per recupeare
                i checked quando modifico la prima volta, ossia quando premo modifica su un post ed accedo al suo form di modifica,
                ma se cambio i checked e si verifica un errore nell'invio del form, mi perde quelli modificati. Invece in questo caso
                con la validazione del create mi recupera grazie ad old('tags', []) le modifiche fatte ai checked--}}

                @if ($errors->any())
                    <input class="form-check-input" name="extras[]" type="checkbox" value="{{ $extra->id }}" id="extra-{{ $extra->id }}" {{ in_array($extra->id, old('extras', [])) ? 'checked' : '' }}>
                @else
                {{-- {{ $post->tags->contains($tag->id) ? 'checked' : '' }} permette di vedere i tag esistenti quando premo modifica
                    post. Altrimenti anche se presenti vedrei nessun tag selezionato. Con la funzione contains verifico tutto questo.
                    Ci dice se in una relazione un Model con un id ha una relazione col Model attuale. Quindi controlliamo che l'elemento
                    con un id, quindi $tag->id l'id del o dei tag/tags, sia contenuto fra i tags, funzione del Model $post.
                    Se è contenuto mi torna true, altrimenti false. Richiamiamo l'elemento relazionato e gli diciamo quale elemento --}}
                    <input class="form-check-input" name="extras[]" type="checkbox" value="{{ $extra->id }}" id="extra-{{ $extra->id }}" {{ $apartment->extras->contains($extra->id) ? 'checked' : '' }}>
                @endif
                
                <label class="form-check-label" for="extra-{{ $extra->id }}">
                    {{$extra->name}}
                </label>
            </div> 
            @endforeach
    </div>
    
    {{-- Non ho aggiunto l'opzione per il visible, io immagino sia un button con una funzione collegata,
        ma così ad occhio e croce non saprei come implementarla, c'è un attimo da ragionarci, magari una
        checkbox con un if-else--}}

    <input class="btn btn-success" type="submit" value="Modifica">
</form>
</div>
@endsection