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
                    <a class="btn btn-primary" href="{{ route('admin.apartments.show', ['apartment' => $apartment->id]) }}">
                        Dettagli appartamento
                    </a>
                </li>

                <li>
                    <a class="btn btn-secondary" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
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