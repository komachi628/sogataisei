@extends('layouts.common_layout')
    @section('content')
        </div>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <h4 class='synopsis'>{{ $post->synopsis }}</h4>
                    <p class='body'>{{ $post->body }}</p>
                    <img src='{{'/storage/' . $post->image}}'>
                    
                </div>
            @endforeach
        </div>
        
        <a href='/posts/create'>create</a>
    @endsection