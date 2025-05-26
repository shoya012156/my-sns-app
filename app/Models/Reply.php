<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
  protected $fillable = [
    'user_id',
    'tweet_id',
    'reply'
  ];
  public function tweet()
  {
    return $this->belongsTo(Tweet::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
