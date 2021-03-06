<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
    'title',
    'content',
    'type',
    'rewards'
  ];

  public function communities() {
    return $this
      ->belongsToMany(
        'App\Community',
        'posts_communities',
        'post_id',
        'community_id'
      );
  }

  public function applicants() {
    return $this
      ->belongsToMany(
        'App\User',
        'applicants',
        'post_id',
        'applicant_id'
      );
  }

  public function poster() {
    return $this->belongsTo('App\User', 'poster_id', 'id');
  }
}
