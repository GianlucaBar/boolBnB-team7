@extends('layouts.app')

@section('title')
    - La tua dashboard
@endsection

@section('dashboard')
<section class="info-user green-sec">
    
    <div class="container">
        <div class="title centered mt-4 mb-4">
            <h2>Dashboard</h2>
        </div>

        <div class="container-user ">
            <div class="user-rep ">
                <h2>I Tuoi Dati</h2>
                <div>Nome Utente: {{ $user->name }}</div>
                <div>Email: {{ $user->email }}</div>
                <div>Numero Appartamenti: {{ $apartment_number}}</div>
            </div>

            {{-- Messages --}}
            <div class="msg-box">
                <h2> I Tuoi Messaggi</h2>
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
            <h2>I Tuoi Appartamenti</h2>
        </div>

        {{-- Add new Apartment --}}
        <div class="new-ap centered ">
            <a id="new-ap"  href="{{ route('admin.apartments.create') }}"><i class="fas fa-home"></i> Aggiungi appartamento </a>
        </div>

        <div class="dashboard-ap mt-4 mb-4">
            @foreach ($apartments as $apartment)
            <div class="ap-line">
                <h5><a class="btn-link" href="{{ route('admin.apartments.show', ['apartment' => $apartment->id]) }}">{{$apartment->title}}</a></h5>

                {{-- CRUD --}}
                <div class="buttoni">

                    <a class="btn-modify" href="{{ route('admin.apartments.edit', ['apartment' => $apartment->id]) }}">
                        Modifica <i class="fas fa-wrench"></i>
                    </a>

                    <form  action="{{ route('admin.apartments.destroy', [
                        'apartment' => $apartment->id
                        ]) }} "method="post">
                    
                        @csrf
                        @method('DELETE')
                        
                        <input type="submit" onclick="return confirm('Are you sure?')" class="btn-elimina" value="Elimina">
                        
                    </form>

                    <a class="btn-sponsor" href="{{ route('admin.sponsor-page', ['id' => $apartment->id]) }}">
                        Sponsorizza <i class="fas fa-wallet"></i>
                    </a>
                    
                </div>
            </div>          
            @endforeach
        </div>

    
    </div>
</section>

    
</div>
@endsection