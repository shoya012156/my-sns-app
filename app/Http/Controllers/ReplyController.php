<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reply;

class ReplyController extends Controller
{
    /**
     * 
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * リプライ投稿をデータベースに保存
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'tweet_id' => 'required|exists:tweets,id',
      ]);

      $reply = $request->reply;

      Reply::create([
        'user_id' => Auth::id(),
        'tweet_id' => $validated['tweet_id'],
        'reply' => $reply
      ]);
      return redirect()->route('tweets.show',['id' => $validated['tweet_id']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
