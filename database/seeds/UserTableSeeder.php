<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Influencer;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

        $influencers = Influencer::query()->create([
            'voornaam' => 'Vincent',
            'achternaam' => 'Roeland',
            'volgers' => 500,
            'instagram_name' => 'VincentRoeland',
            'leeftijd' => 22,
            'telefoonnummer' => "0612345678",
            'email'=> 'Vincent@laravel.test'
        ]);


        $user = User::query()->create([
            'name' => 'Beheerder',
            'email' => 'ysc@admin.test',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'imageable_id' => $influencers->id,
            'imageable_type' => 'App\Business',
        ]);






    $influencer = new User();
    $influencer->name = 'Default Influencer Name';
    $influencer->email = 'employee@example.com';
    $influencer->password = bcrypt('secret');
    $influencer->imageable_id = 1;
    $influencer->imageable_type = 'App\Influencer';
    $influencer->save();
    $influencer->assignRole('Influencer');


    $company = new User();
    $company->name = 'Default Business Name';
    $company->email = 'Business@example.com';
    $company->password = bcrypt('secret');
    $company->imageable_id = 2;
    $company->imageable_type = 'App\Business';
    $company->save();
    $company->assignRole('Business');



    // Superadmin Users

    $Vincent = new User();
    $Vincent->name = 'Vincent Roeland';
    $Vincent->email = 'vincentroeland@laravel.com';
    $Vincent->password = bcrypt('secret');
    $Vincent->imageable_id = 3;
    $Vincent->imageable_type = 'App\Business';
    $Vincent->save();
    $Vincent->assignRole('Business');


    $derek = new User();
    $derek->name = 'Derek de Witte';
    $derek->email = 'derek@laravel.com';
    $derek->password = bcrypt('secret');
    $derek->imageable_id = 4;
    $derek->imageable_type = 'App\Business';
    $derek->save();
    $derek->assignRole('superadmin');


    }
}
