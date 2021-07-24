@extends('layouts.app')

@section('title')
    - Sponsorship 
@endsection

<<<<<<< HEAD
@section('content')
    <div class="container-fluid">
        <section class="sp-section">

            <div class="sp-description">
                <h2 class="sponsorship-title">Sponsorizza il tuo annuncio!</h2>

                <p>Acquistando uno dei nostri pacchetti potrai mettere in evidenza in homepage l'annuncio del tuo appartamento.</p>
            </div>
            
            <div class="sp-choose">
                <p>Hai a disposizione tre livelli di sponsorizzazione: </p>
            
                <ul class="sponsor-buttons">
                    
                    @foreach ($sponsorships as $sponsorship)
                        <li>
                            <a class="btn-sponsorship" id="{{$sponsorship->name}}" href="{{route('admin.payment', ['id' => $sponsorship->id,
                            'thisApartmentId' => $thisApartmentId])}}">
                            {{ucfirst($sponsorship->name)}}
                            </a>

                            <span class="sp-price">€ {{$sponsorship->price}}</span>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
        
                
        </section>

=======
@section('sponsorship')
<div class="sponsor-container">
    <div class="container-fluid">
        @foreach ($sponsorships as $sponsorship)
            <a href="{{route('admin.payment', [
                'id' => $sponsorship->id,
                'thisApartmentId' => $thisApartmentId])}}">
                Pacchetto {{$sponsorship->name}}
                {{$sponsorship->price}}
                <br>
            </a>
        @endforeach
>>>>>>> d53b3d52ced8007cfebeac857fa07dfc13324e2f
    </div>
</div>
@endsection