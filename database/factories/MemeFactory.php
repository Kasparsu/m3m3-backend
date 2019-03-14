<?php

use Faker\Generator as Faker;
use App\Meme;
$factory->define(Meme::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6, true),
    ];
});
