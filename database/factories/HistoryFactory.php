<?php

use Faker\Generator as Faker;

$factory->define(App\History::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence(3),
        'details' =>$faker->paragraph(10),
    ];
});
