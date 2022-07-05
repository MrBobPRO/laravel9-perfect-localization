<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home($locale)
    {
        $posts = Post::all();
        
        return view('home', compact('posts'));
    }

    public function contacts()
    {
        return view('contacts');
    }
}
