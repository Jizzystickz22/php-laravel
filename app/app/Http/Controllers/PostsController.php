<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
     public function index(){
 
        $posts =Post::all();
 
        return view('Post.index',compact('Posts'));
    }
 
    public function create(){
        return view('Posts.create');
    }
 
    public function storepost(){
 
        $posts = new Post();
 
        $posts->title = request('title');
        $posts->body = request('body');
 
        $posts->save();
 
        return redirect('/Posts');
    }
}


