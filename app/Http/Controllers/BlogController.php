<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        // Mengambil semua postingan yang sudah dipublikasikan
        $posts = Post::published()->get();

        // Pastikan variabel $posts dikirimkan ke view
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        // Mengambil postingan berdasarkan slug
        $post = Post::where('slug', $slug)->with(['author', 'category'])->firstOrFail();
        return view('blog.show', compact('post'));
    }
}
