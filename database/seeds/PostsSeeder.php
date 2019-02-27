<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $communities = \App\Community::all();

    foreach ($communities as $community) {
      $members = $community->members;
      foreach ($members as $member) {
        $post = factory(\App\Post::class)->state('content-post')->create([
          'poster_id' => $member->id
        ]);
        $post->communities()->save($community);

        $post = factory(\App\Post::class)->state('request-post')->create([
          'title' => 'Some title',
          'rewards' => 'something',
          'poster_id' => $member->id
        ]);
        $post->communities()->save($community);
      }
    }
  }
}
