<?php

use Illuminate\Database\Seeder;

class CommunitiesMembersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $communities = \App\Community::all();

    foreach ($communities as $community) {
      for ($i = 0; $i < 5; $i++) {
        $community->members()->save(factory(\App\User::class)->create());
      }
    }
  }
}
