@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8"><img src="/storage/{{ $post->image }}" class="w-100"></div>
            <div class="col-4">
                <form action ="{{route('post.postEdit', $post)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('POST')
                    {{-- <div class="form-group row">
                        <label for="postpic">Photo</label>
                        <input type="file" name="postpic" id="postpic" value="{{ $post->image }}">
                    </div> --}}

                    <div class="form-group row">
                        <label for="caption">Caption</label>
                        <input class="form-control" type="text" name="caption" id="caption" value="{{ $post->caption }}">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
