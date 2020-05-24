<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domain;
use Faker\Generator as Faker;

$factory->define(Domain::class, function (Faker $faker) {
    return [
        'domain' => $faker->unique()->domainName,
        'brand_name' => $faker->words(2, true),
        'is_from_serp' => $faker->boolean,
        'is_major' => $faker->boolean,
        'is_minor' => $faker->boolean,
        'is_local' => $faker->boolean,
        'is_started' => $faker->boolean,
        'is_potential_customer' => $faker->boolean,
    ];
});