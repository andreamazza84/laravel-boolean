<?php

namespace App\Http\Controllers;

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
    public function blog()
    {
        return view('blog');
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
