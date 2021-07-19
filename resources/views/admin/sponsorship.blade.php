@extends('layouts.app');

@section('content')
    @foreach ($sponsorships as $sponsorship)
        <a href="{{route('admin.payment', ['id' => $sponsorship->id])}}">
            Pacchetto {{$sponsorship->name}}
            {{$sponsorship->price}}
            <br>
        </a>

        {{-- <a href="{{route('admin.payment')}}">
            Pacchetto 72 ore <br>
            5,99
        </a>

        <a href="{{route('admin.payment')}}">
            Pacchetto 144 ore <br>
            9,99
        </a> --}}
    @endforeach
@endsection