@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $apartment->title }}</h1>

    <p>Informazioni da aggungere, questo è un test, ma il collegamento funziona</p>

    {{ dd($apartment)}}
</div>
@endsection