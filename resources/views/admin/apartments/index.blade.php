@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('title')
    - La tua dashboard
@endsection

@section('dashboard')
<div id="root2">
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

            {{-- Add new Apartment --}}
            <a class="new-ap"  href="{{ route('admin.apartments.create') }}"> Aggiungi appartamento <i class="fas fa-home"></i> </a>

        </div>

        <div class="dashboard-ap mt-4 mb-4">
            @foreach ($apartments as $apartment)
            <div class="ap-line mt-2 mb-2">
                <h5>{{$apartment->title}}</h5>

                {{-- CRUD --}}
                <div class="buttoni">

                    <a class="btn btn-primary" href="{{ route('admin.apartments.show', ['apartment' => $apartment->id]) }}">
                        Dettagli
                    </a>

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

                    <a class="btn btn-primary" href="{{ route('admin.apartments.show', ['apartment' => $apartment->id]) }}">
                        Messaggi
                    </a>
                </div>
            </div>          
            @endforeach
        </div>
        <a href="{{ route('stats', [ 'apartmentId' => 34 ]) }}">stats</a>
        <a href="{{ route('user-apartments', [ 'userId' => $userId ]) }}">apartemsts</a>

        {{-- Messages --}}
        <section class="msg-box">
            @foreach ($messagesArray as $messages)
                @foreach ($messages as $message)
                <div>{{ $message->sender_email }} - {{ $message->msg_subject }}</div>
                <a class="btn btn-primary" href="{{ route('admin.message', ['id' => $message->id]) }}"></a>
                @endforeach
            @endforeach
        </section>

        {{-- statistic  --}}
        <section class="stats">
            <canvas id="chart" height="400" width="600"></canvas>
        </section>
        <input type="hidden" value="{{ $apartments }}" v-model="apartments">
    </div>
</div>
    
</div>

@endsection

@section('footer-scripts')
    <script src="{{ asset('js/charts.js') }}"></script>
@endsection
