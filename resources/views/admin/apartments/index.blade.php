@extends('layouts.app')


@section('title')
    - La tua dashboard
@endsection

@section('dashboard')
<section class="info-user green-sec">
    
    <div class="container">
        <div class="title centered mt-4 mb-4">
            <h2 class="tracking-in-expand">LA TUA DASHBOARD</h2>
        </div>

        {{-- User info --}}
        <div class="container-user slide-rotate-hor-top">
            <div class="user-rep ">
                <h2><i class="fas fa-user"></i> I Tuoi Dati <i class="fas fa-user icon-hide"></i></h2>
                <div class="user-rep-box">
                    <div>
                        <h4>Nome Utente</h4>
                        {{ $user->name }}
                    </div>
                {{-- <div>
                    <h4>Email</h4> 
                    {{ $user->email }}
                </div> --}}
                    <div>
                        <h4>Numero Appartamenti</h4>
                        {{ $apartment_number}}
                    </div>
                </div>
            </div>

            {{-- Messages --}}
            <div class="msg-box slide-rotate-hor-top">
                <h2> <i class="far fa-envelope "></i> I Tuoi Messaggi <i class="far fa-envelope icon-hide"></i></h2>
                @foreach ($messagesArray as $messages)
                    @foreach ($messages as $message)
                    <div>
                        <ul>
                            <li>
                                <span>{{ $message->sender_email }} - {{ $message->msg_subject }}</span>
                                <a class="read-btn" href="{{ route('admin.message', ['id' => $message->id]) }}">
                                    Leggi
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                @endforeach
            </div>
            

        </div>
    </div>
</section>

<section class="ap-users white-sec">
    <div class="container">

        <div class="my-ap mt-4 mb-2 centered">
            <h2 class="big-h2">I Tuoi Appartamenti</h2>
        </div>

        {{-- Add new Apartment --}}
        <div class="new-ap centered">
            <a id="new-ap"  href="{{ route('admin.apartments.create') }}"><i class="fas fa-plus"></i> Aggiungi appartamento </a>
        </div>

        <div class="dashboard-ap mt-4 mb-4">
            @foreach ($apartments as $apartment)
            <div class="ap-line">

                <div class="title-dashboard">
                    <a class="btn-link" href="{{ route('admin.apartments.show', ['apartment' => $apartment->id]) }}">{{$apartment->title}}</a>

                @foreach ($sponsored as $sponsoredAp)
                        
                        @if ($apartment->id == $sponsoredAp->id)
                            <span data-tooltip="sponsored"><i class="fas fa-star sponsored-star"></i></span>
                        @endif

                @endforeach
                </div>
            
                {{-- CRUD --}}
                <div class="buttoni">

                    <a class="btn-modify" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                        Modifica
                        {{-- Modifica <i class="fas fa-wrench"></i> --}}
                    </a>

                    <form  action="{{ route('admin.apartments.destroy', [
                        'apartment' => $apartment->id
                        ]) }} "method="post">
                    
                        @csrf
                        @method('DELETE')
                        
                        <input type="submit" onclick="return confirm('Are you sure?')" class="btn-elimina" value="Elimina">
                        
                    </form>

                    <a class="btn-sponsor" href="{{ route('admin.sponsor-page', ['id' => $apartment->id]) }}">
                        Sponsorizza
                        {{-- Sponsorizza <i class="fas fa-star"></i> --}}
                    </a>
                    
                </div>
            </div>          
            @endforeach
        </div>

    
    </div>
</section>

@endsection


