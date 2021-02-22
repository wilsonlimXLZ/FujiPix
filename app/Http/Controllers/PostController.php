<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'caption' => 'required',
            'postpic' => ['required', 'image'],
        ]);
 
        $user = Auth::user();
        $profile = new Post();
        $imagePath = request('postpic')->store('uploads', 'public');
 
        $profile->user_id = $user->id;
        $profile->caption = request('caption');
        $profile->image = $imagePath;
        $saved = $profile->save();
 
        if ($saved) {
            return redirect('/profile');
        }
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($postID){
        $post = Post::where('id', $postID)->first();
        $user = Auth::user();
        $comments = \App\Models\Comment::where('post_id', $postID)->orderBy('created_at', 'desc')->get();
        // $profile = Profile::where('user_id', $user->id)->first();
        return view('post.show', [
            'post' => $post,
            'user' => $user,
            'comments' => $comments
        ]);
    }
    
    public function showhome($postID){
        $post = Post::where('id', $postID)->first();
        $user = Auth::user();
        $comments = \App\Models\Comment::where('post_id', $postID)->orderBy('created_at', 'desc')->get();
        // $profile = Profile::where('user_id', $user->id)->first();
        return view('post.showhome', [
            'post' => $post,
            'user' => $user,
            'comments' => $comments
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        
        $post = Post::where('id', $post)->first();
        return view('post.editpost', [
        'post' => $post
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($post)
    {
        // $data = request()->validate([
        // 'caption' => 'required',
        // ]);
        // // Load the existing profile
    
        // $post = Post::where('id', $post)->first();
    
        // $post->caption = request('caption');
        // // Save the new profile pic... if there is one in the request()!
    
        // // Now, save it all into the database
        // $updated = $post->save();
        //  if ($updated) {
        //     return redirect('/post/{{$post->id}}');
        //     }

        // $post = Post::where('id', $post)->first();
        // $user = Auth::user();
        // $comments = \App\Models\Comment::where('post_id', $post)->orderBy('created_at', 'desc')->get();
        // // $profile = Profile::where('user_id', $user->id)->first();
        // return view('post.showhome', [
        //     'post' => $post,
        //     'user' => $user,
        //     'comments' => $comments
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $destroyed = $post->delete();
        if ($destroyed){
            return redirect('/profile');
        }
    }

    public function postEdit($post)
    {
        $data = request()->validate([
            'caption' => 'required',
            ]);
            // Load the existing profile
        
            $post = Post::where('id', $post)->first();
            $user = Auth::user();
        
            $post->caption = request('caption');
            // Save the new profile pic... if there is one in the request()!
        
            // Now, save it all into the database
            $updated = $post->save();
             if ($updated) {
                return view('post.show', [
                    'post' => $post,
                    'user' => $user
                ]);
            }
  
    }

}
   