@extends('layouts.common_layout')

@section('content')
<div class="container">
    <div class='post'>
        
    <h1 class='title'>{{$post->title}}</h1>
    
    <div class="bd-placeholder-img card-img-top">
        <img class="card-img-top" src="{{ $post->image }}" class="img-fluid" width='5' height='600'  alt="No Image">
    </div>
    
    <p class='body'>{{ $post->body }}</p>
    </div>
    
     <a href='/article_list'>記事一覧</a> >>
    
@if($post->category === 'チャリ旅！')
    <a href='/tyaritabi'>{{$post->category}}</a>
@else
    <a href='/tabimeshi'>{{$post->category}}</a>
    
@endif

 
@endsection