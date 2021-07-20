@extends('layouts.app')

@section('dashboard')
<div class="container">
    <div class="centered mt-4 mb-4">
        <h2 >Dashboard</h2>
    </div>

    <div class="container ">
        <div class="user-rep centered">
            <h2>Riepilogo dati utente</h2>
    </div>

    <div class="my-ap mt-4 mb-2">
        <h2>I miei Appartamenti</h2>

        <a class="new-ap"  href="{{ route('admin.apartments.create') }}"> Aggiungi appartamento <i class="fas fa-home"></i> </a>

    </div>

    <div class="dashboard-ap mt-4 mb-4">
        @foreach ($apartments as $apartment)
        <div class="ap-line mt-2 mb-2">
            <h5>{{$apartment->title}}</h5>

            <div class="buttoni">
                <a class="btn btn-primary" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                    Modifica Appartamento
                </a>

                <form  action="{{ route('admin.apartments.destroy', [
                    'apartment' => $apartment->id
                    ]) }} "method="post">
                
                    @csrf
                    @method('DELETE')
                    
                    <input type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" value="Elimina">
                </form>

                <a class="btn btn-secondary" href="{{ route('admin.sponsor-page', ['id' => $apartment->id]) }}">
                    Sponsorizza
                </a>
            </div>
        </div>          
        @endforeach
    </div>
</div>

    
</div>
@endsection