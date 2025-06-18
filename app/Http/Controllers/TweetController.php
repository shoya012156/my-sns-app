<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
  // ツイートの一覧を取得して表示する
  public function index()
  {
    $tweets = Tweet::orderBy('id', 'desc')->get();
    return view('home', compact('tweets'));
  }

  // フォームから投稿を取得してデータベースへ保存してホームにリダイレクトさせる
  public function store(Request $request)
  {
    $validated = $request->validate([
      'tweet' => 'required|string|max:280',
    ],[
      'tweet.required' => 'ツイート内容は必須です',
      'tweet.max' => 'ツイートは280文字以内で入力してください'
    ]);
    $tweet = new Tweet();
    $tweet->tweet = $validated['tweet'];
    $tweet->user_id = Auth::id();
    $tweet->save();
    return redirect()->route('home')->with('tweet.success', 'ツイートを投稿しました');
  }

  // ツイートのidによって詳細の表示をさせる
  public function show($id)
  {
    $tweet = Tweet::with('replies')
      ->orderBy('id', 'desc')
      ->findOrFail($id);
    return view('tweet_show', compact('tweet'));
  }
}
