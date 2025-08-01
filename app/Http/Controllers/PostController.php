<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', ['posts' => $posts]);
    }
    public function show($id)
{
    $post = Post::findOrFail($id); // Eloquent ORM を使って取得
    return view('posts.show', compact('post'));
}
    
}
