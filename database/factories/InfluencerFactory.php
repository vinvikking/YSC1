<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Influencer::class, function (Faker $faker) {
    return [
    	 'user_id' => User::query()->inRandomOrder()->get('id')->first(),
        // 'user_id' => function () {
        //     return factory(App\User::class)->create()->id;
        // },
        'voornaam' => $faker->firstName,
        'achternaam' => $faker->lastName,
        'telefoonnummer' => $faker->phoneNumber,
        'instagram_name' => '@' . $faker->username,
        'facebook_name' => '@' . $faker->firstName . $faker->lastName,
        'twitter_name' => '@' . $faker->username,
        'interesse' => $faker->text,
        'leeftijd' => $faker->unique()->numberBetween(15, 30),
        'volgers' => $faker->unique()->numberBetween(500, 1500),
        'email' => $faker->email
    ];
});

