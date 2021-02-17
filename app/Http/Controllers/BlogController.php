<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    /**
     * Show index page
     * @return view
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show blog page
     * @return view
     */
    public function blog(Post $post)
    {   
        $posts = $post->all();
        //dd($posts);
        return view('blog', compact('posts'));
    }

    /**
     * Show contacts page
     * @return view
     */
    public function contatti()
    {
        return view('contatti');
    }

}
