@extends('layouts.app')

@section('title')
    - Sponsorship 
@endsection

@section('message-box')
<div class="message-admin-container">
    <div class="container-fluid">

        <div class="message-title">
            <i class="far fa-envelope"></i>
        <h2>{{$message->msg_subject}}</h2>
        </div>
        
        <div class="message-box">
            <h4>Mittente:</h4>
            {{ $message->sender_email }}
        </div>
        
        <div class="message-box">
            <h4>Nome:</h4>
            {{ $message->name }}
        </div>
        
        <div class="message-box">
            <h4>Messaggio:</h4>
            <p>
                {{ $message->msg_content }}
            </p>
        </div>

        {{-- <div class="message-box">
            <h4>Messaggio:</h4>
            <p>
                {{ $message->msg_content }}
            </p>
        </div> --}}
    </div>
</div>
@endsection