<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::all();
        return view('mainpage.blog')->with('blogs',$blogs);
    }


    public function single_blog()
    {
        return view('mainpage.single_blog');
    }

}
