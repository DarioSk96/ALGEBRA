@extends('layouts.master_layout')

@section('title')
    Dobrodosli na naš blog!
@endsection

@section('content')
    <main role="main" class="container" style="margin-top:5px">

    <div class="row">
    <div class="col-sm-8 blog-main">
    @if($posts)
    @foreach($posts as $post)
    <div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta"><small></i>December 30, 1992 by <a href="#">Marin</a></i></small></p>

    <p>{{ $post->description }} <a href="#"> Klikni za više</a></p>
    <blockquote>
        <p>{{ $post->created_at}} <a href="" class="btn btn-primary btn-sm"> Learn more</a></p>
    
    
    
    
        <div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta"><small></i>December 30, 1992 by <a href="#">Marin</a></i></small></p>

    <p>{{ $post->description }} <a href="#"> Klikni za više</a></p>
    <blockquote>
        <p>{{ $post->created_at}} <a href="" class="btn btn-primary btn-sm"> Learn more</a></p>


<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta"><small></i>December 30, 1992 by <a href="#">Marin</a></i></small></p>

    <p>{{ $post->description }} <a href="#"> Klikni za više</a></p>
    <blockquote>
        <p>{{ $post->created_at}} <a href="" class="btn btn-primary btn-sm"> Learn more</a></p>
    
    </div>
    @endforeach
    @endif

    <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-primary" href="#">Newer</a>

    <aside class="col-sm-3 ml-sm-auto blog-sidebar">
        <div class="sidebar-module">
        <h4>Latest Posts</h4>
        <ol class="list-unstyled">
        <li><a href="#">March 2017</a></li>
        <li><a href="#">March 2018</a></li>
        <li><a href="#">March 2019</a></li>
        </ol>
        </div>

        <div class="sidebar-module">
        <h4>Elswhere</h4>
        <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
        </ol>
        </div>
        </aside>
    </div>
    </main>
@endsection


