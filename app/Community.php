<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
  protected $fillable = ['slug', 'name', 'description', 'owner_id'];

  public function members() {
    return $this
      ->belongsToMany(
        'App\User',
        'communities_members',
        'community_id',
        'member_id'
      );
  }

  public function posts() {
    return $this
      ->belongsToMany(
        'App\Post',
        'posts_communities',
        'community_id',
        'post_id'
      );
  }

  public function owner() {
    return $this->belongsTo('App\User', 'owner_id');
  }
}
