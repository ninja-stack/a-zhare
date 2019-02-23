<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function communities() {
    return $this
      ->belongsToMany(
        'App\Community',
        'posts_communities',
        'post_id',
        'community_id'
      );
  }
}
