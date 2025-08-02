<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // updated_atカラムを昇順（古い順）で取得
    $posts = \App\Models\Post::orderBy('updated_at', 'asc')->get();

    return view('posts.index', ['posts' => $posts]);
}
    public function show($id)
{
    $post = Post::findOrFail($id); // Eloquent ORM を使って取得
    return view('posts.show', compact('post'));
}
public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|max:20',
        'content' => 'required|max:200',
    ]);

    $post = new Post();
    $post->title = $validated['title'];
    $post->content  = $validated['content']; // カラム名がbodyならここ注意
    $post->save();

    return redirect('/posts');
}
public function __construct()
{
    $this->middleware('auth')->only(['create', 'store']);
}
    
}
