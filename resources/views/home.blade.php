@extends('layouts.base')

@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{ asset('img/home-bg.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Secretaría de trabajo</h1>
              <span class="subheading">Suterm sección 53</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="containerluid">
      <div class="row" style="padding: 20px 20px 20px 20px">
      <div class="col-xs-12 col-sm-3 offset-sm-0 col-md-3 offset-md-0 col-lg-3 offset-lg-0">
      <ul class="list-group">
          <li class="list-group-item active">Cumpleaños del mes</li>
          @foreach ($bds as $bd)
          <li class="list-group-item justify-content-between">{{ $bd->fullname }}
          <span class="badge badge-default badge-pill">{{ $bd->bd }}</span>
          </li>
          @endforeach
        </ul>
      </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          @foreach ($posts as $post)
          <div class="post-preview">
            <a href="{!! route('post.show.public',['id' => $post->id]) !!}">
              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{ str_limit($post->description, 80) }}...
              </h3>
            </a>
            <p class="post-meta">Publicado por
              <a href="#">{{ $post->name }}</a>
              en {{ $post->created_at }}</p>
          </div>
          <hr>
          @endforeach
          <!-- Pager -->
          <div class="clearfix">
            
            <a class="btn btn-primary float-right" href="{{ $posts->nextPageUrl() }}">Publicaciones anteriores &rarr;</a>
          </div>
        </div>
      </div>
    </div>

@endsection
