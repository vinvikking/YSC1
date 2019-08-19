<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Influencer;
use App\Business;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

	// $imageable_type = $faker->randomElement(['App\Influencer', 'App\Business']);
	$imageable_type = $faker->randomElement(['App\Influencer']);

	
    if ($imageable_type == 'App\Influencer') {
        $imageable_id = Influencer::query()->inRandomOrder()->get('id')->first();
    }
    elseif ($imageable_type == 'App\Business') {
        $imageable_id = Business::query()->inRandomOrder()->get('id')->first();
    }


    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('secret'), // password
        'remember_token' => Str::random(10),
        'imageable_id' =>  $imageable_id,
        'imageable_type' => $imageable_type,
    ];
});
