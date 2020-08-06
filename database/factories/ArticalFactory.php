<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artical;
use Faker\Generator as Faker;

$factory->define(Artical::class, function (Faker $faker) {
    return [
        //
        "supject" => $faker->name,
        "user_id" =>  factory(App\User::class),
        "content" => $faker->text()
    ];
});
