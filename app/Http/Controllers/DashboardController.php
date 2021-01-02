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
        $users = User::all();
        return view('dashboard.index')->with('users', $users);
    }

    public function users(){
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        // $users = User::orderby('created_at', 'desc')->paginate(20);
        // $users = User::all();
        // return view('dashboard.users')->with('users', $users);
        return view('dashboard.users');
    }
}
