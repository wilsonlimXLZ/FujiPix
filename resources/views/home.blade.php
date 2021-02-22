@extends('layouts.app')

@section('content')

<div class="homeheader">
    <h1 class="">Welcome to FujiPix</h1>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active slide1">
      <div class="carousel-caption d-none d-md-block slide1caption">
        <a class="slide1title" href="https://fujifilm-x.com/global/products/cameras/x100v/"><h2 class="slide1title">Fuji-X100V</h2></a>
        <a class="slide1title" href="https://fujifilm-x.com/global/products/cameras/x100v/"><h5>Be Minimalist</h5></a>
      </div>
    </div>
    <div class="carousel-item slide2">
      <div class="carousel-caption d-none d-md-block slide2caption">
        <a class="slide2title" href="https://www.pictorial.com.sg/"><h2>Join Our Workshop</h2></a>
      </div>
    </div>
    <div class="carousel-item slide3">
      <div class="carousel-caption d-md-block slide3caption">
        
        <a class="slide1title" href="https://fujifilm-x.com/global/products/cameras/gfx100/"><h2 class="slide3title">Resolution Breakthrough</h2></a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container-fluid feed">
    <h2 class="feed-header">Lastest Post</h2>
     <div class="row">
     @if($recent_posts)
        @foreach($recent_posts as $post)
            <div class="col-lg-6 col-md-6 mb-5 feed-container">
                {{-- <a href="/post/{{$post->id}}" > --}}
                 <a href="/post/showhome/{{$post->id}}" >
                {{-- <a href="{{route('post.showhome', $post)}}" > --}}
                <img src="/storage/{{$post->image}}" class="images">
                 </a>
                 <h4 class="feed-caption">{{$post->user->name}}</h4>
                 <p class="feed-caption">@</p>
                 <p class="feed-caption">{{$post->caption}}</p>
            </div>
        @endforeach
     @endif                  
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
@endsection
