@extends('layouts.binbo')

    @section('content')
    <div class="under-header">
      <div class="top-img">
      </div>
    </div>
    <div class="main1">
      <div class="main--contents1">
        @foreach($posts as $post)
          <a href="/posts/show?id={{$post->id}}" class="article">
            <div class="article__img">
              <img src="{{$post->mainimg}}" alt="">
            </div>
            <div class="article__bottom">
              <div class="post-title">
                {{$post->title}}
              </div>
              <div class="post-price">
              原価：{{$post->cost}}円
              </div>
            </div>
          </a>
        @endforeach
  </div>
    @endsection

