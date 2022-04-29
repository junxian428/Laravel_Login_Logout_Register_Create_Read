<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required'
        ]);
        
        $post = new Post;
        $post->title = request('title');
        $post->description = request('description');
        $post->save();
        
        return redirect()->to('/mainpage');
    }

    public function view()
    {
        $posts = DB::table('posts')->get();
 
        return view('post.view', ['posts' => $posts]);
    }

  
}
