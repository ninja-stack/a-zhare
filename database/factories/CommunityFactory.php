<?php

use App\Community;
use App\User;
use Faker\Generator as Faker;

$factory->define(Community::class, function (Faker $faker) {
  return [
    'slug' => $faker->md5(),
    'name' => $faker->company(),
    'description' => 'Some basic community',
    'owner_id' => factory(User::class)->create()->id
  ];
});
