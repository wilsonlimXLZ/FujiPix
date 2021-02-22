@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
                
                <div class="container profile-container">
                    <div class="row justify-content-center">
                        <div class="col-md-3 col-lg-3 col-sm-3">
                            <img class="rounded-circle profile-image" width="200" src="/storage/{{$profile->image}}">
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9 profile-caption">
                            <h3>{{ $user->name }}</h3>
                            <span><strong>{{$postscount}}</strong> posts</span>
                            <div class="pt-3">{{$profile->description}}</div>
                            <div class="pt-3"><a class="btn btn-outline-info" href="/profile/edit">Edit profile</a></div>
                        </div>
                    </div>
                   <div class="row pt-5">
                         @foreach($posts as $post)
                            <div class="col-lg-4 mb-5">
                                <a href="/post/{{$post->id}}">
                                <img class="post-image" src="/storage/{{$post->image}}" class="w-100">
                             </a>
                            </div>
                        @endforeach
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection
