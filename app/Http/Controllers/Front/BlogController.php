<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('front.blog.index' , compact('blogs'));
    }
}
