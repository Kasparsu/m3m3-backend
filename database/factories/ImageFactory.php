<?php

use Faker\Generator as Faker;

$factory->define(\App\Image::class, function (Faker $faker) {
    return [
        'path' => 'public/images/JpE0EP2o33tLTH6Dzk0zWPcZvcNz3sl9T5aAJ4mk.png',
        'source' => 'upload',
    ];
});
