<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run() {
    $this->call(TestUserSeeder::class);
    $this->call(CommunitiesSeeder::class);
    $this->call(CommunitiesMembersSeeder::class);
    $this->call(PostsSeeder::class);
  }
}
