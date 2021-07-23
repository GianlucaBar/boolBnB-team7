@extends('layouts.app')

@section('title')
    - Sponsorship 
@endsection

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
    </div>
</div>
@endsection