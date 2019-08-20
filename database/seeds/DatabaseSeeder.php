<?php

use Illuminate\Database\Seeder;
use App\Campaign;
use App\Influencer;
use App\Business;
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
        factory(User::class, 10)->create();
        factory(Influencer::class, 5)->create();
        // factory(Business::class, 5)->create();
        

        $this->call(CampaignTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
