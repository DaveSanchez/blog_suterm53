@extends('admin.layouts.base')

@section('title')
    Lista de usuarios
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
                                    <th>Nombre</th> 
                                    <th>Usuario</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                @foreach ($users as $user)
                                <tr> 
                                    <th scope="row">1</th> 
                                    <td>{{ $user->name }}</td> 
                                    <td>{{ $user->username }}</td> 
                                </tr> 
                                @endforeach
                            </tbody> 
                        </table>
                </div>
            </div>
</div>

@endsection