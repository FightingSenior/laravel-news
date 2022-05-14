<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\News::class, function (Faker $faker) {

    $title = $faker->sentence;

    return [

        'title'         => $title,
        'slug'          => Str::slug($title),
        'details'       => $faker->paragraph,
        'image'         => 'post.jpg',
        'status'        => $faker->boolean,
        'featured'      => $faker->boolean,
        'category_id'   => $faker->numberBetween(1, 9)
    ];
});
