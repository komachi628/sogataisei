@extends('layouts.common_layout')
@section('content')
<div class="container">
<div class="row">
@foreach ($post as $post)
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <div class="bd-placeholder-img card-img-top">
          <img class="card-img-top" src="{{ $post->image }}"　width="300" height="300"　 alt="No Image">
        </div>

        <div class="card-body">
          <h4>{{$post->title}}</h4>
          <p class="card-text text-truncate">
            {{$post->synopsis}}
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                <a href='/posts/{{$post->id}}'>
                  読む
                </a>
              </button>
            </div>
            <small class="text-muted">{{$post->updated_at}}</small>
          </div>
        </div>
    </div>
  </div>
  
  
@endforeach

<a class="btn btn-primary" href="product" role="button">コメントを見にいく</a>
@endsection