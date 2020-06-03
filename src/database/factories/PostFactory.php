<?php

use App\Entities\Post;
use Faker\Generator as Faker;
use VCComponent\Laravel\Faker\Faker\VCCFaker;

$factory->define(Post::class, function (Faker $faker) {
    $faker->addProvider(new VCCFaker ($faker));
    return [
        'title'       => $faker->postTitle,
        'description' => $faker->sentences(rand(4, 7), true),
        'content'     => $faker->postContent,
        'status'      => 1,
    ];
});

$factory->state(Post::class, 'pages', function () {
    return [
        'type' => 'pages',
    ];
});

$factory->state(Post::class, 'constructions', function () {
    return [
        'type' => 'constructions',
    ];
});

$factory->state(Post::class, 'slides', function () {
    return [
        'type' => 'slides',
    ];
});
