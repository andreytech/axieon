<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use App\Domain;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {

    return [
        'domain_id' => function () {
            return factory(Domain::class)->create()->getKey();
        },
        'subdomain' => $faker->randomElement(['', $faker->word]),
        'path' => '/'.$faker->randomElement(['', $faker->slug]),
        'is_from_serp' => $faker->boolean,
    ];
});