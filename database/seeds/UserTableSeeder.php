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
    
        // Superadmin Users

        $user3 = User::query()->create([
            'name' => 'Vincent Beheerder',
            'email' => 'Vincent@laravel.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            // 'imageable_id' => $Vincent->id,
            'imageable_type' => 'App\Influencer',
        ]);
        $user3->assignRole('superadmin');


        $Vincent = Influencer::query()->create([
            'user_id' => $user3->id,
            'voornaam' => 'Vincent',
            'achternaam' => 'Roeland',
            'volgers' => 500,
            'instagram_name' => '@VincentRoeland',
            'leeftijd' => 22,
            'telefoonnummer' => "0612345678",
            'email'=> 'Vincent@laravel.test'
        ]);


        $user = User::query()->create([
            'name' => 'Derek Beheerder',
            'email' => 'Derek@laravel.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            // 'imageable_id' => $Derek->id,
            'imageable_type' => 'App\Influencer',
        ]);
        $user->assignRole('superadmin');


         $Derek = Influencer::query()->create([
            'user_id' => $user->id,
            'voornaam' => 'Derek',
            'achternaam' => 'De Witte',
            'volgers' => 100,
            'instagram_name' => '@DerekCorky',
            'leeftijd' => 34,
            'telefoonnummer' => "0612345678",
            'email'=> 'Derek@laravel.com'
        ]);



        ## Default Influencer ## 

            $User1 = new User();
            $User1->name = 'Default Influencer Name';
            $User1->email = 'employee@example.com';
            $User1->password = bcrypt('secret');
            // $User1->imageable_id = $DefaultInfluencer->id;
            $User1->imageable_type = 'App\Influencer';
            $User1->save();
            $User1->assignRole('Influencer');


            $DefaultInfluencer = Influencer::query()->create([
                'user_id' => $User1->id,
                'voornaam' => 'Default Influencer',
                'achternaam' => 'Roeland',
                'volgers' => 1000,
                'instagram_name' => '@Default',
                'leeftijd' => 25,
                'telefoonnummer' => "0612345678",
                'email'=> 'employee@example.com'
            ]);






    // Superadmin Users

    // $Vincent = new User();
    // $Vincent->name = 'Vincent Roeland';
    // $Vincent->email = 'vincentroeland@laravel.com';
    // $Vincent->password = bcrypt('secret');
    // $Vincent->imageable_id = 3;
    // $Vincent->imageable_type = 'App\Business';
    // $Vincent->save();
    // $Vincent->assignRole('superadmin');


    }
}
