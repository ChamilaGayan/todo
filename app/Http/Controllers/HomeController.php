<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $post = Blog::get();
        return view('welcome', ['posts'=> $post]);
    }


}
