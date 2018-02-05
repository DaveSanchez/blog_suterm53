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
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{ $post->description }}
              </h3>
            </a>
            <p class="post-meta">Publicado por
              <a href="#">{{ $post->name }}</a>
              en {{ $post->created_at }}</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="slider">
              
            @foreach ($images as $img)

                <div>
                <img src="{{ asset($img->path) }}" class="" alt="...">                
                </div>
            @endforeach

              </div>
            
          
        </div>
      </div>
    </div>

    <script>
        $('#carousel-example-generic').carousel();
    </script>

@endsection
