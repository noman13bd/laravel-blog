<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() 
    {
    	$posts = Post::all();
    	return view('posts.index', compact('posts'));
    }

    public function create() 
    {
    	return view('posts.create');
    }

    public function show($id) 
    {
    	$post = Post::find($id);
    	return view('posts.show', compact('post'));
    }

    public function store() 
    {
    	$this->validate( request(), [
    		'title' => 'required|min:5',
    		'body' => 'required',
    	]);

    	/*$post = new Post;
    	$post->title = request('title');
        $post->body = request('body');
    	$post->user_id = auth()->id();
    	$post->save();*/

        /*Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id(),
        ]);*/

        auth()->user()->publish( 
            new Post(request(['title','body']))
        );
    	return redirect('/');
    }
}
