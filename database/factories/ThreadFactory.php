<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            factory(User::clas)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->text,
    ];
});
