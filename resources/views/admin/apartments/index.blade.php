@extends('layouts.app')

@section('list-apartment')
<div class="container">
    <div class="list-apartment">
        <div class="title-page">
            <h1>Lista Appartamenti</h1>
        </div>

        <div class="card-container">
            @foreach ($apartments as $apartment)
                <div class="card" style="background-image: url('{{ asset('storage/' . $apartment->cover) }}')">
                    <ul>
                    
                        <li>
                            <h3>{{ $apartment->title }}</h3>
                        </li>

                        <li class="hidden centered">
                            <a  href="{{ route('admin.apartments.show', ['apartment' => $apartment->id]) }}">
                                <i class="far fa-eye"></i> <br> Dettagli appartamento
                            </a>
                        </li>

                        <li class="hidden">
                            <a class="btn btn-secondary" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                                Modifica appartamento
                            </a>
                        </li>

                        <form class="hidden" action="{{ route('admin.apartments.destroy', [
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

    </div>

</div>
@endsection