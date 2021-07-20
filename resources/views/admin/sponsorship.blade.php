@extends('layouts.app');

@section('content')
    @foreach ($sponsorships as $sponsorship)
        <a href="{{route('admin.payment', [
            'id' => $sponsorship->id,
            'thisApartmentId' => $thisApartmentId])}}">
            Pacchetto {{$sponsorship->name}}
            {{$sponsorship->price}}
            <br>
        </a>
    @endforeach
@endsection