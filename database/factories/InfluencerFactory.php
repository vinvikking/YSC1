<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Influencer::class, function (Faker $faker) {
    return [
    	'user_id' => User::query()->inRandomOrder()->get('id')->first(),
        'voornaam' => $faker->firstName,
        'achternaam' => $faker->lastName,
        'telefoonnummer' => $faker->phoneNumber,
        'instagram_name' => '@' . $faker->username,
        'leeftijd' => $faker->unique()->numberBetween(15, 30),
        'volgers' => $faker->unique()->numberBetween(500, 1500),
        'email' => $faker->email
    ];
});

