@extends('layouts.app');

@section('title')
    - Sponsorship 
@endsection

@section('content')
    <div class="container">
        @foreach ($sponsorships as $sponsorship)
            <a href="{{route('admin.payment', [
                'id' => $sponsorship->id,
                'thisApartmentId' => $thisApartmentId])}}">
                Pacchetto {{$sponsorship->name}}
                {{$sponsorship->price}}
                <br>
            </a>
        @endforeach
    </div>
@endsection