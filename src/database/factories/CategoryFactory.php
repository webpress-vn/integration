<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use VCComponent\Laravel\Faker\Faker\VCCFaker;

$factory->define(Category::class, function (Faker $faker) {
    $faker->addProvider(new VCCFaker($faker));
    return [
        'name' => $faker->productBrand,
        'slug' => Str::slug($faker->productBrand),
        'type' => '',
    ];
});

$factory->state(Category::class, 'products', function () {
    return [
        'type' => 'products',
    ];
});
