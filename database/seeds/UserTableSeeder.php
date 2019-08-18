<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    $influencer = new User();
    $influencer->name = 'Default Influencer Name';
    $influencer->email = 'employee@example.com';
    // $influencer->choice = 1; // Influencer
    $influencer->password = bcrypt('secret');
    $influencer->save();
    $influencer->assignRole('Influencer');


    $company = new User();
    $company->name = 'Default Business Name';
    $company->email = 'Business@example.com';
    // $company->choice = 2; // Business User
    $company->password = bcrypt('secret');
    $company->save();
    $company->assignRole('Business');



    // Superadmin Users

    $Vincent = new User();
    $Vincent->name = 'Vincent Roeland';
    $Vincent->email = 'vincentroeland@laravel.com';
    // $Vincent->choice = 2; // Company User
    $Vincent->password = bcrypt('secret');
    $Vincent->save();
    $Vincent->assignRole('superadmin');


    $derek = new User();
    $derek->name = 'Derek de Witte';
    $derek->email = 'derek@laravel.com';
    // $derek->choice = 2; // Company User
    $derek->password = bcrypt('secret');
    $derek->save();
    $derek->assignRole('superadmin');


    }
}
