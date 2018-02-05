@extends('admin.layouts.base')

@section('title')
    Lista de mensajes
    @endsection

@section('content')

<div id="page-wrapper">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        
                        <h3>{{ $message->contact }}</h3>
                        <p>{{ $message->created_at }}</p>
                        <p>{{ $message->email }}</p>
                        <p>{{ $message->phone }}</p>
                        <p>{{ $message->body }}</p>
                        <ul>
                        @foreach ($documents as $d)
                                <li>
                                   <a href="{{ asset($d->path) }}">Archivo</a>     
                                </li>
                        @endforeach
                        </ul>
                </div>
            </div>
</div>

@endsection