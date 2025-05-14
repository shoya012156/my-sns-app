<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
  public function index()
  {
    $tweets = Tweet::orderBy('id','desc')->get();
    return view('home', compact('tweets'));
  }

  public function store(Request $request) {
    $tweet = new Tweet();
    $tweet->tweet=$request->tweet;
    $tweet->user_id=Auth::id();
    $tweet->save();
    return redirect()->route('home');
  }


}
