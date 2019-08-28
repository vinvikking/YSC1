<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Campaign;
use App\Business;

class CampaignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

            $company = new User();
            $company->name = 'Default Business Name';
            $company->email = 'Business@example.com';
            $company->password = bcrypt('secret');
            $company->imageable_type = 'App\Business';
            $company->save();
            $company->assignRole('Business');


            $DefaultBusiness = Business::query()->create([
                'user_id' => $company->id,
                'bedrijfsnaam' => 'Default Business',
                'URL' => 'www.yoursocialconnect.nl',
                'KVK' => 123567,
                'telefoonnummer' => '0618604925',
                'beschrijving' => 'Dit is het bedrijf van yoursocialconnect.',
                'locatie' => 'Goes',
                'branch'=> 'Food',
                'email'=> 'Business@example.com'
            ]);



    $campaign1 = new Campaign();
    $campaign1->business_id = $DefaultBusiness->id;
    $campaign1->title = 'Chocolade Fabriek';
    $campaign1->description = 'Promoot onze fabriek!';
    $campaign1->image = '0';
    $campaign1->save();

    $campaign2 = new Campaign();
    $campaign2->business_id = $DefaultBusiness->id;
    $campaign2->title = 'Sneaker Store';
    $campaign2->description = 'Draag onze sneakers!';
    $campaign2->image = '0';
    $campaign2->save();

    $campaign3 = new Campaign();
    $campaign3->business_id = $DefaultBusiness->id;
    $campaign3->title = 'Q-Reizen';
    $campaign3->description = 'Op reis naar Afrika!';
    $campaign3->image = '0';
    $campaign3->save();

    $campaign4 = new Campaign();
    $campaign4->business_id = $DefaultBusiness->id;
    $campaign4->title = 'Mode campagne';
    $campaign4->description = 'Voor ons merk Mango!';
    $campaign4->image = '0';
    $campaign4->save();

    $campaign5 = new Campaign();
    $campaign5->business_id = $DefaultBusiness->id;
    $campaign5->title = 'Promotie restaurant Zillertal';
    $campaign5->description = 'Witte sneeuw in het restaurant!';
    $campaign5->image = '0';
    $campaign5->save();

    $campaign6 = new Campaign();
    $campaign6->business_id = $DefaultBusiness->id;
    $campaign6->title = 'Suppen in het kanaal';
    $campaign6->description = 'Promoot ons sup-bedrijf!';
    $campaign6->image = '0';
    $campaign6->save();


    }
}
