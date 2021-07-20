@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>scrivi al proprietario</h1>

        <form action="{{ route('store-message', ['id' => $apartmentId]) }}" method="post">
            @csrf
            @method('POST')
    
            @guest

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
    
                <div class="form-group">
                    <label for="sender_email">E-mail</label>
                    <input type="email" class="form-control" id="sender_email" name="sender_email">
                </div>
    
                <div class="form-group">
                    <label for="msg_subject">Oggetto</label>
                    <input type="text" class="form-control" id="msg_subject" name="msg_subject">
                </div>
    
                <div class="form-group">
                    <label for="msg_content">Messaggio</label>
                    <textarea name="msg_content" id="msg_content" class="form-control" cols="30" rows="10"></textarea>
                </div>
                
                
            @else
    
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                </div>
    
                <div class="form-group">
                    <label for="sender_email">E-mail</label>
                    <input type="email" class="form-control" id="sender_email" name="sender_email" value="{{$user->email}}">
                </div>
    
                <div class="form-group">
                    <label for="msg_subject">Oggetto</label>
                    <input type="text" class="form-control" id="msg_subject" name="msg_subject">
                </div>
    
                <div class="form-group">
                    <label for="msg_content">Messaggio</label>
                    <textarea name="msg_content" id="msg_content" class="form-control" cols="30" rows="10"></textarea>
                </div>
    
            @endguest
            
            <input class="btn btn-success" type="submit" value="Invia messaggio">
        </form>
    </div>

    
@endsection