<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('tweets')->insert([
      'id' => 1,
      'user_id' => 1,
      'tweet' => 'Just had a great lunch!'
    ]);
    DB::table('tweets')->insert([
      'id' => 2,
      'user_id' => 2,
      'tweet' => 'Loving the new season of my favorite show.'
    ]);
    DB::table('tweets')->insert([
      'id' => 3,
      'user_id' => 3,
      'tweet' => 'What a beautiful day!'
    ]);
  }
}
