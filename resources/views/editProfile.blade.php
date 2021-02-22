@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-4"></div>
           <div class="col-4">
               <form action="{{ route('profile.postEdit', $profile->user_id)}}" enctype="multipart/form-data" method="post">
                   @csrf
                   @if ($profile == null)
                       <div>where my profile</div>
                   @endif
                   <div class="form-group row profilecreate">
                       <label for="description">Description</label>
                       <input class="form-control" type="text" name="description" id="description"
                           value="{{ $profile->description }}">
                   </div>

                   <div class="form-group row profilecreate">
                       <label for="profilepic">Profile picture</label>
                       <input type="file" name="profilepic" id="profilepic">
                   </div>

                   <div class="form-group row">
                       <button type="submit" class="btn btn-outline-info btn-lg">Edit profile</button>
                   </div>
               </form>
           </div>
           <div class="col-4"></div>
       </div>
   </div>
@endsection
