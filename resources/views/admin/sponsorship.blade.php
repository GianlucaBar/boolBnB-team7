@extends('layouts.app')

@section('title')
    - Sponsorship 
@endsection

@section('content')
    <div class="container-fluid">
        <section class="sp-section">

            <div class="sp-description">
                <h2 class="sponsorship-title">Sponsorizza il tuo annuncio!</h2>

                <p>Acquistando uno dei nostri pacchetti potrai mettere in evidenza in homepage l'annuncio del tuo appartamento.</p>

                <p>Hai a disposizione tre livelli di sponsorizzazione: Base, Medium e Premium. Con il pacchetto <strong>Base</strong> avrai 24 ore di visibilita' in homepage, con il <strong>Medium</strong> 72 ore e con il <strong>Premium</strong> 144 ore.  <br>
        
                </p>
            </div>
            
            <div class="sp-choose">
                <p>Scegli il tuo pacchetto:</p>
                <ul class="sponsor-buttons">
                    
                    @foreach ($sponsorships as $sponsorship)
                        <li>
                            <a class="btn-sponsorship" id="{{$sponsorship->name}}" href="{{route('admin.payment', ['id' => $sponsorship->id,
                            'thisApartmentId' => $thisApartmentId])}}">
                            {{ucfirst($sponsorship->name)}}
                            </a>

                            <span class="sp-price">€ {{$sponsorship->price}} | {{$sponsorship->duration}} h</span>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
        
                
        </section>

    </div>
</div>
@endsection