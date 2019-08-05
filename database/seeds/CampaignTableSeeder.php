<?php

use Illuminate\Database\Seeder;
use App\Campaign;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    $campaign1 = new Campaign();
    $campaign1->id = '1';
    $campaign1->user_id = '1';
    $campaign1->title = 'Chocolade Fabriek';
    $campaign1->description = 'Promoot onze fabriek!';
    $campaign1->image = '0';
    $campaign1->save();

    $campaign2 = new Campaign();
    $campaign2->id = '2';
    $campaign2->user_id = '2';
    $campaign2->title = 'Sneaker Store';
    $campaign2->description = 'Draag onze sneakers!';
    $campaign2->image = '0';
    $campaign2->save();

    $campaign3 = new Campaign();
    $campaign3->id = '3';
    $campaign3->user_id = '3';
    $campaign3->title = 'Q-Reizen';
    $campaign3->description = 'Op reis naar Afrika!';
    $campaign3->image = '0';
    $campaign3->save();


    }
}
