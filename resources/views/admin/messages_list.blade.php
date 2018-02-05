@extends('admin.layouts.base')

@section('title')
    Lista de mensajes
    @endsection

@section('content')

<div id="page-wrapper">
        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                        <table class="table"> 
                            <caption>Optional table caption.</caption> 
                            <thead> 
                                <tr> 
                                    <th>#</th> 
                                    <th>Contacto</th> 
                                    <th>Mensaje</th> 
                                    <th>*</th>
                                </tr> 
                            </thead> 
                            <tbody> 
                                @foreach ($messages as $m)
                                <tr class="{{ !$m->seen ? 'danger': '' }}"> 
                                    <th scope="row">1</th> 
                                    <td>{{ $m->contact }}</td> 
                                    <td>{{ str_limit($m->body, 200) }}...</td> 
                                    <td><a href="{!! route('messages.show',['id' => $m->id]) !!}">Ver</a></td>
                                </tr> 
                                @endforeach
                            </tbody> 
                        </table>
                </div>
            </div>
</div>

@endsection