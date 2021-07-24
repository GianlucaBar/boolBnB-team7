@extends('layouts.app')

@section('title')
    - Riepilogo transazione
@endsection

@section('content')
<div class="thank-you-container">
    <div class="container-fluid">
        <h2>Grazie per il tuo acquisto!</h2><div class="transaction">
            Troverai il tuo appartamento nella sezione in evidenza
        </div>
        <div class="transaction"><span class="strong-text">id transazione:</span> {{ $transactionId }}</div>
        <div>
            <a class="btn" href="{{ url('/') }}">
                Torna alla home
            </a>
        </div>
    </div>
</div>
@endsection