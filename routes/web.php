<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ReplyController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/home',[TweetController::class, 'index'])->name('home');
  
  Route::post('/tweets',[TweetController::class, 'store'])->name('tweets.store');
  
  Route::get('/tweets/{id}',[TweetController::class, 'show'])->name('tweets.show');
  
  Route::resource('replies',ReplyController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
