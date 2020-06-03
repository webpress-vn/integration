<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use VCComponent\Laravel\MediaManager\Entities\Media;
use VCComponent\Laravel\MediaManager\Entities\MediaItem;

$factory->define(MediaItem::class, function (Faker $faker) {
    return [
        'url' => 'https://media.styletribute.com/products/86870/620x620/74b6470e77a7c3145a5531a0c358440d744c3913.jpg',
    ];
});

$factory->define(Media::class, function (Faker $faker) {
    return [
        'model_id'          => function () {
            return factory(MediaItem::class)->create()->id;
        },
        'model_type'        => 'media',
        'collection_name'   => 'default',
        'name'              => '74b6470e77a7c3145a5531a0c358440d744c3913',
        'file_name'         => '74b6470e77a7c3145a5531a0c358440d744c3913.jpg',
        'mime_type'         => 'image/jpeg',
        'disk'              => 'media',
        'size'              => 16944,
        'manipulations'     => '',
        'custom_properties' => '',
        'responsive_images' => '',
    ];
});
