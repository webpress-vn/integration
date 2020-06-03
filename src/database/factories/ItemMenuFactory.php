<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\ItemMenu;
use Faker\Generator as Faker;
use VCComponent\Laravel\Faker\Faker\Provider\MenuFaker;
use Illuminate\Support\Str;

$factory->define(ItemMenu::class, function (Faker $faker) {
    $faker->addProvider(new MenuFaker($faker));
    return [
        'label' => $faker->name(),
        'link' => Str::slug($faker->name()),
        'menu_id'=>1,
        'type' =>'menu'
    ];
});
