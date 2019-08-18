<?php

use Illuminate\Database\Seeder;
use App\Campaign;
use App\Role;
use App\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CampaignTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
