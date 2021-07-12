@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista Appartamenti</h1>

    @foreach ($apartments as $apartment)
        <div>
            <ul>
                <li>
                    {{ $apartment->title }}
                </li>
                <li>
                    {{ $apartment->description }}
                </li>
                <li>
                    {{ $apartment->rooms }}
                </li>
                <li>
                    {{ $apartment->beds }}
                </li>
                <li>
                    {{ $apartment->baths }}
                </li>
                <li>
                    {{ $apartment->square_meters }}
                </li>
                <li>
                    {{ $apartment->address }}
                </li>
                <li>
                    {{ $apartment->latitude }}
                </li>
                <li>
                    {{ $apartment->longitude }}
                </li>
                <li>
                    {{ $apartment->cover }}
                </li>
                <li>
                    {{ $apartment->visible }}
                </li>
                <li>
                    {{ $apartment->slug }}
                </li>

                <li>
                    <a href="{{ route('admin.apartments.show', ['apartment' => $apartment->id]) }}">
                        Dettagli appartamento
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                        Modifica appartamento
                    </a>
                </li>

                <form action="{{ route('admin.apartments.destroy', [
                    'apartment' => $apartment->id
                    ]) }} "method="post">
                
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="elimina">
                </form>

            </ul>
        </div>
    @endforeach

</div>
@endsection