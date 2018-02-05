@extends('admin.layouts.base')

@section('title')
    Nuevo post
    @endsection

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1 class="page-header">Nuevo</h1>
            <div class="panel panel-default">
                    <div class="panel-heading">
                        Datos de la publicación
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="titulo" class="control-label">titulo</label>
                            <input type="text" class="form-control" id="titulo" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                        <span id="helpBlock1" class="help-block text-danger">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="descripcion" class="control-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="description" rows="10">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                        <span id="helpBlock1" class="help-block text-danger">
                                            {{ $errors->first('description') }}
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('archivos') ? ' has-error' : '' }}">
                                <label for="archivos" class="control-label">Archivos </label>
                                <input type="file" name="archivos[]" class="form-control" placeholder="(PDF, WORD, JPG)" multiple>
                                @if ($errors->has('archivos'))
                                        <span id="helpBlock1" class="help-block text-danger">
                                            {{ $errors->first('archivos') }}
                                        </span>
                                    @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Publicar</button>
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