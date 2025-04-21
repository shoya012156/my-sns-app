<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReplysTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('replys')->insert([
      'id' => 1,
      'user_id' => 1,
      'tweet_id' => 2,
      'reply' => 'Sounds delicious!'
    ]);
    DB::table('replys')->insert([
      'id' => 2,
      'user_id' => 2,
      'tweet_id' => 3,
      'reply' => 'Which show are you watching?'
    ]);
    DB::table('replys')->insert([
      'id' => 3,
      'user_id' => 3,
      'tweet_id' => 4,
      'reply' => 'Indeed, it’s wonderful!'
    ]);
  }
}
