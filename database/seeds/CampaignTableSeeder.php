<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
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

        $campaign4 = new Campaign();
    $campaign4->id = '4';
    $campaign4->user_id = '4';
    $campaign4->title = 'Mode campagne';
    $campaign4->description = 'Voor ons merk Mango!';
    $campaign4->image = '0';
    $campaign4->save();

    $campaign5 = new Campaign();
    $campaign5->id = '5';
    $campaign5->user_id = '5';
    $campaign5->title = 'Promotie restaurant Zillertal';
    $campaign5->description = 'Witte sneeuw in het restaurant!';
    $campaign5->image = '0';
    $campaign5->save();

    $campaign6 = new Campaign();
    $campaign6->id = '6';
    $campaign6->user_id = '6';
    $campaign6->title = 'Suppen in het kanaal';
    $campaign6->description = 'Promoot ons sup-bedrijf!';
    $campaign6->image = '0';
    $campaign6->save();


    }
}
