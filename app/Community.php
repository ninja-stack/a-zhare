<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
  public function members() {
    return $this
      ->belongsToMany(
        'App\User',
        'communities_members',
        'community_id',
        'member_id'
      );
  }
}
