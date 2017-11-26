<?php

use Faker\Generator as Faker;
use App\Thread;
use App\User;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'thread_id' => function () {
            return factory(Thread::class)->create()->id;
        },
        'body' => $faker->text,
    ];
});
