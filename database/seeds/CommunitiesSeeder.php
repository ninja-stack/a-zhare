<?php

use Illuminate\Database\Seeder;

class CommunitiesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    factory(\App\Community::class, 5)->create();
  }
}
