@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    
                     <div class="form-group row">
                        <label for="caption">Title</label>
                        <input class="form-control" type="text" name="title" id="caption">
                    </div>

                    <div class="form-group row">
                        <label for="caption">First Paragraph</label>
                        <textarea class="form-control" type="text" 
                        cols="80" rows="30"
                        name="content1" id="caption"></textarea>
                    </div>

                    <div class="form-group row">
                        <label for="caption">Second Paragraph</label>
                        <textarea class="form-control" type="text" 
                        cols="80" rows="30"
                        name="content2" id="caption"></textarea>
                    </div>

                    <div class="form-group row">
                        <label for="caption">Third Paragraph</label>
                        <textarea class="form-control" type="text" 
                        cols="80" rows="30"
                        name="content3" id="caption"></textarea>
                    </div>

                    <div class="form-group row">
                        <label for="postpic">Header Picture</label>
                        <input type="file" name="image1" id="postpic">
                    </div>

                     <div class="form-group row">
                        <label for="postpic">Sub Picture 1</label>
                        <input type="file" name="image2" id="postpic">
                    </div>

                    <div class="form-group row">
                        <label for="postpic">Sub Picture 2</label>
                        <input type="file" name="image3" id="postpic">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Post Your Blog</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection



