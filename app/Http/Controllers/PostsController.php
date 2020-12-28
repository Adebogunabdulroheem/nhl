<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PostsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        //pagination
        $posts = Post::orderby('created_at', 'desc')->paginate(5);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'Body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload

        if($request->hasFile('cover_image')){
            //Get file with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Just Extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload inage
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore );
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        
        //Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('Body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view ('posts.show')->with('post', $post); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        //Check the corret user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'title' => 'required',
        'Body' => 'required'
        ]);

        if($request->hasFile('cover_image')){
            //Get file with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Just Extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload inage
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore );
        }
        //Update Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('Body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Check the corret user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if ($post->cover_image != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/cover_images/'.$post);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }
}
