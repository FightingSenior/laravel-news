<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Category::class, function (Faker $faker) {

    $category = 'Category-' . $faker->unique()->randomDigit;

    return [
        'name'      => $category,
        'slug'      => Str::slugs($category),
        'image'     => 'category.jpg',
        'status'    => $faker->boolean
    ];
});
