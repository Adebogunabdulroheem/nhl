<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    //  public function index(){
    //     $posts = Post::orderBy('created_at', 'desc')->take(2)->get();
    //     return view('pages.index')->with('posts', $posts);
    // }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function blog(){
        return view('pages.blog');
    }
    public function nhsl(){
        return view('pages.nhsl');
    }
    public function nesl(){
        return view('pages.nesl');
    }
    public function nmsl(){
        return view('pages.nmsl');
    }
    public function ncfsl(){
        return view('pages.ncfsl');
    }
    public function nnmcsl(){
        return view('pages.nnmcsl');
    }
    public function nsl(){
        return view('pages.nsl');
    }
}
 