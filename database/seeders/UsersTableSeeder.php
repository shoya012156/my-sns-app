<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// これを追加
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('users')->insert([
        'id' => 3,
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@john.com',
        'password' => 'ef92b778bafe771e89245b89ecbc08a44a4e166c0665991188'
      ]);
      DB::table('users')->insert([
        'id' => 4,
        'first_name' => 'Jane',
        'last_name' => 'Smith',
        'email' => 'jane@jane.com',
        'password' => 'ef92b778bafe771e89245b89ecbc08a44a4e166c0665991188'
      ]);
      DB::table('users')->insert([
        'id' => 5,
        'first_name' => 'Alice',
        'last_name' => 'Johnson',
        'email' => 'alice@alice.com',
        'password' => 'ef92b778bafe771e89245b89ecbc08a44a4e166c0665991188'
      ]);
    }
}
