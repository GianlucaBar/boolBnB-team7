@extends('layouts.app')

@section('title')
    - Sponsorship 
@endsection

@section('content')
    <div class="container">

    <h2>{{$message->msg_subject}}</h2>

    <div>{{ $message->sender_email }}</div>

    <div>{{ $message->name }}</div>

    <p>{{ $message->msg_content }}</p>


    </div>
@endsection