<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

    // $role_influencer = Role::where('name', 'Influencer')->first();
    // $role_company  = Role::where('name', 'Company')->first();
    // $role_admin  = Role::where('name', 'Admin')->first();



    $influencer = new User();
    $influencer->name = 'Default influencer Name';
    $influencer->email = 'influencer@example.com';
    $influencer->choice_type = 'App\Influencer'; // Influencer
    $influencer->password = bcrypt('secret');
    $influencer->save();

    $influencer->assignRole('influencer');
    // $influencer->roles()->attach($role_influencer);


    $business = new User();
    $business->name = 'Default business Name';
    $business->email = 'business@example.com';
    $business->choice_type = 'App\Business'; // Business User
    $business->password = bcrypt('secret');
    $business->save();
    $business->assignRole('business');
    // $company->roles()->attach($role_company);


    // Vincent + Derek 

    $Vincent = new User();
    $Vincent->name = 'Vincent Roeland';
    $Vincent->email = 'vincentroeland@laravel.com';
    $Vincent->choice_type = 'Admin'; // Business User
    $Vincent->password = bcrypt('secret');
    $Vincent->save();
    $Vincent->assignRole('superadmin');

    // $Vincent->roles()->attach($role_admin);

    $derek = new User();
    $derek->name = 'Derek de Witte';
    $derek->email = 'derek@laravel.com';
    $derek->choice = 'Admin'; // Business User
    $derek->password = bcrypt('secret');
    $derek->save();

    $derek->assignRole('superadmin');
    // $derek->roles()->attach($role_admin);


    }
}
