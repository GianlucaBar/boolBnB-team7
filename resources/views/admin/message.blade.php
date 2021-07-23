@extends('layouts.app')

@section('title')
    - Sponsorship 
@endsection

@section('message-box')
<div class="message-admin-container">
    <div class="container">

        <h2>{{$message->msg_subject}}</h2>
        
        <h4>Mittente:</h4>
        <div>{{ $message->sender_email }}</div>
        
        <h4>Nome:</h4>
        <div>{{ $message->name }}</div>
        
        <h4>Messaggio:</h4>
        <p>{{ $message->msg_content }}</p>
    </div>
</div>
@endsection