@extends('layouts.app')

@section('title')
    - Riepilogo transazione
@endsection

@section('content')
<div class="container">
    <h2>Grazie per il tuo acquisto!</h2>
    <div>id transazione: {{ $transactionId }}</div>
</div>
@endsection