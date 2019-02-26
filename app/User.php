<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'password', 'gender'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * Get the identifier that will be stored in the subject claim of the JWT.
   *
   * @return mixed
   */
  public function getJWTIdentifier() {
    return $this->getKey();
  }

  /**
   * Return a key value array, containing any custom claims to be added to the JWT.
   *
   * @return array
   */
  public function getJWTCustomClaims() {
    return [];
  }

  public function communities() {
    return $this
      ->belongsToMany(
        'App\Community',
        'communities_members',
        'member_id',
        'community_id'
      );
  }

  public function ownedCommunities(){
    return $this->hasMany('App\Community', 'owner_id', 'id');
  }

  public function posts(){
    return $this->hasMany('App\Post', 'poster_id', 'id');
  }
}
