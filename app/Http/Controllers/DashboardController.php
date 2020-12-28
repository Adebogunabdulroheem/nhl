<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard.index')->with('posts', $user->posts);
    }

    public function users(){
        $users = User::orderby('created_at', 'desc')->paginate(20);
        return view('dashboard.users')->with($users);
    }
}
