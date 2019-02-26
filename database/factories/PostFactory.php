<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
  return [
    'content' => $faker->text(),
  ];
});

$factory->state(\App\Post::class, 'text-post', [
  'type' => 'CONTENT'
]);
