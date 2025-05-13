<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tweet extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  use HasFactory;
  protected $fillable = [
    'tweet',
    'user_id',
  ];
}
