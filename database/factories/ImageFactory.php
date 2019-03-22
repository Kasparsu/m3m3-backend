<?php

use Faker\Generator as Faker;

$factory->define(\App\Image::class, function (Faker $faker) {
    return [
        'path' => 'https://picsum.photos/800/100/?random&blur&seed=' . $faker->sha1,
        'source' => 'upload',
        'hash' => 's'
    ];
});
