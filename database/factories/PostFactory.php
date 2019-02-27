<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
  return [
    'content' => $faker->text(),
  ];
});

$factory->state(\App\Post::class, 'content-post', [
  'type' => 'CONTENT'
]);

$factory->state(\App\Post::class, 'request-post', [
  'type' => 'REQUEST'
]);
