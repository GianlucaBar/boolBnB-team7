@extends('layouts.app')

@section('title')
    - Contatta il proprietario
@endsection

@section('content')
    <div class="container-fluid message-guest">
        <h1>Contatta il proprietario</h1>

        <form action="{{ route('store-message', ['id' => $apartment->id]) }}" method="post">
            @csrf
            @method('POST')
            
            {{-- Form for guest --}}
            @guest

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
    
                <div class="form-group">
                    <label for="sender_email">E-mail</label>
                    <input type="email" class="form-control" id="sender_email" name="sender_email" required>
                </div>
    
                <div class="form-group">
                    <label for="msg_subject">Oggetto</label>
                    <input type="text" class="form-control" id="msg_subject" name="msg_subject" value="{{$apartment->title}}" required>
                </div>
    
                <div class="form-group">
                    <label for="msg_content">Messaggio</label>
                    <textarea name="msg_content" id="msg_content" class="form-control" cols="30" rows="10" required>Ciao, ti contatto per l'appartamento "{{ $apartment->title }}"</textarea>
                </div>
                
            {{-- Form for logged users --}}
            @else
    
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                </div>
    
                <div class="form-group">
                    <label for="sender_email">E-mail</label>
                    <input type="email" class="form-control" id="sender_email" name="sender_email" value="{{$user->email}}" required>
                </div>
    
                <div class="form-group">
                    <label for="msg_subject">Oggetto</label>
                    <input type="text" class="form-control" id="msg_subject" name="msg_subject" value="{{$apartment->title}}" required>
                </div>
    
                <div class="form-group">
                    <label for="msg_content">Messaggio</label>
                    <textarea name="msg_content" id="msg_content" class="form-control" cols="30" rows="10" required>Ciao, ti contatto per l'appartamento "{{ $apartment->title }}"</textarea>
                </div>
    
            @endguest
            
            {{-- Submit equal for everyone --}}
            <input class="btn btn-success" type="submit" value="Invia messaggio">
        </form>
    </div>

    
@endsection