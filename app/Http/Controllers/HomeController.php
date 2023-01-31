<?php


namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
     {
        $post = Post::all();
        return view('home',['posts' => $post]);
    }

    public function about()
     {
        return view('about');
    }
}