<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Influencer;
use App\Campaign;
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
	$choice_type = $faker->randomElement(['App\Influencer', 'App\Business']);

	if ( $choice_type == 'App\Influencer') {
        // $choice_id = Influencer::query()->inRandomOrder()->get('id')->first();
        $choice_id = 1;
    } elseif( $choice_type == 'App\Business'){
    // 	$choice_id = Campaign::query()->inRandomOrder()->get('id')->first();
        $choice_id = 2;
     }



    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'choice_id' =>  $choice_id,
        'choice_type' => $choice_type,
        
    ];
});
