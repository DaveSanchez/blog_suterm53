@extends('admin.layouts.base')

@section('title')
    Nuevo cumpleaños
    @endsection

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1 class="page-header">Nuevo</h1>
            <div class="panel panel-default">
                    <div class="panel-heading">
                        Datos
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('birthday.store') }}">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('fullname') ? ' has-error' : '' }}">
                            <label for="fullname" class="control-label">Nombre</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname') }}">
                            @if ($errors->has('fullname'))
                                        <span id="helpBlock1" class="help-block text-danger">
                                            {{ $errors->first('fullname') }}
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('bd') ? ' has-error' : '' }}">
                            <label for="bd" class="control-label">Fecha Nacimiento</label>
                            <input type="date" class="form-control" id="bd" name="bd" value="{{ old('bd') }}" />
                            @if ($errors->has('bd'))
                                        <span id="helpBlock1" class="help-block text-danger">
                                            {{ $errors->first('bd') }}
                                        </span>
                                    @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </form>
                    </div>
                </div>    
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

@if (session('success'))

    <script>
        swal({
            text: "{{ session('success') }}",
            timer: 2000,
            icon: "success",
            button: false
        });
    </script>

@endif

@endsection