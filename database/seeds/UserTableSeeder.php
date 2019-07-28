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
    

    $role_influencer = Role::where('name', 'Influencer')->first();
    $role_company  = Role::where('name', 'Company')->first();
    $role_admin  = Role::where('name', 'Admin')->first();

    $influencer = new User();
    $influencer->name = 'Default Influencer Name';
    $influencer->email = 'employee@example.com';
    $influencer->choice = 1; // Influencer
    $influencer->password = bcrypt('secret');
    $influencer->save();
    $influencer->roles()->attach($role_influencer);


    $company = new User();
    $company->name = 'Default Company Name';
    $company->email = 'company@example.com';
    $company->choice = 2; // Company User
    $company->password = bcrypt('secret');
    $company->save();

    $company->roles()->attach($role_company);


    // Vincent + Derek 

    $Vincent = new User();
    $Vincent->name = 'Vincent Roeland';
    $Vincent->email = 'vincentroeland@laravel.com';
    $Vincent->choice = 2; // Company User
    $Vincent->password = bcrypt('secret');
    $Vincent->save();

    $Vincent->roles()->attach($role_admin);

    $derek = new User();
    $derek->name = 'Derek de Witte';
    $derek->email = 'derek@laravel.com';
    $derek->choice = 2; // Company User
    $derek->password = bcrypt('secret');
    $derek->save();

    $derek->roles()->attach($role_admin);


    }
}
