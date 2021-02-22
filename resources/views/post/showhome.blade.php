@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4 show-container">
            <h2>{{$post->user->name}}</h2>
            {{-- <h2>{{$user->name}}</h2> --}}
            <p class="feed-caption">@</p>
            <p class="feed-caption"> {{$post->caption}}</p>
             <form action="{{ route('comment.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group row mt-3">
                        <h5 for="comment">Add a public comment..</h5>
                        <textarea class="form-control" type="text" 
                        cols="80" rows="5"
                        name="comment" id="caption"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        <button type="submit" class="btn btn-info">Post It</button>
                    </div>
             </form>
              <div class="row pt-5">
                        <h2>Comment</h2>
                         @foreach($comments as $comment)
                            <div class="col-12 mb-2 comment-feed">
                                <h3>{{$comment->user->name}}</h3>
                                <p>{{$comment->comments}}</p>
                             </a>
                            </div>
                        @endforeach
                    </div>
        </div>
    </div>
</div>

@endsection

{{-- <form action="{{ route('comment.store', $post)}}" enctype="multipart/form-data" method="post"> --}}
