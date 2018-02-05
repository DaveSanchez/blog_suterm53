@extends('admin.layouts.base')

@section('title')
    Lista de mensajes
    @endsection

@section('content')

<div id="page-wrapper">
      <!-- /.row -->
      <div class="row">
        <!-- /.col-lg-8 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Últimos 3 posts
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        @foreach ($posts as $post)
                        <a href="{!! route('post.show.public',['id' => $post->id]) !!}" class="list-group-item">
                            <i class="fa fa-envelope fa-fw"></i> {{ $post->title }}: por <small>{{ $post->name }}</small>
                            <span class="pull-right text-muted small"><em>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</em>
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