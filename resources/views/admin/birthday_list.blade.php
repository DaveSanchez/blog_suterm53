@extends('admin.layouts.base')

@section('title')
    Todos los cumpleaños
    @endsection

@section('content')

<div id="page-wrapper">
      <!-- /.row -->
      <div class="row">
        <!-- /.col-lg-8 -->
        <div class="col-lg-4" style="padding-top:30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Cumpleaños
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        @foreach ($bds as $bd)
                        <a href="#" class="list-group-item">
                            <i class="fa fa-birthday-cake fa-fw"></i> {{ $bd->fullname }}</small>
                            <span class="pull-right text-muted small"><em>{{ $bd->bd }}</em>
                            </span>
                            <a href=""></a>
                        </a>
                        @endforeach
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
</div>

@endsection