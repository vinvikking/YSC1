<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Campaign;
use App\Business;
use App\CampaignSignUp;

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

    $dt = now();
    $dateNow = $dt->toDateTimeString();

    $campaign1 = new Campaign();
    $campaign1->business_id = $DefaultBusiness->id;
    $campaign1->title = 'Chocolade Fabriek';
    $campaign1->description = 'Promoot onze fabriek!';
    $campaign1->city = 'Vlissingen';
    $campaign1->postal_code = '4384 CK';
    $campaign1->contact_name = 'Kered EttiweD';  
    $campaign1->contact_phone = '06-28407812';
    $campaign1->contact_phone2 = '0118-123456';
    $campaign1->contact_email = 'customer@support.nl';
    $campaign1->startDateTime = $dateNow;
    $campaign1->endDateTime = $dateNow;
    $campaign1->image = '0';
    $campaign1->save();

    $campaign2 = new Campaign();
    $campaign2->business_id = $DefaultBusiness->id;
    $campaign2->title = 'Sneaker Store';
    $campaign2->description = 'Draag onze sneakers!';
    $campaign2->city = 'Vlissingen';
    $campaign2->postal_code = '4384 CK';
    $campaign2->contact_name = 'Kered EttiweD';
    $campaign2->contact_phone = '06-28407812';
    $campaign2->contact_phone2 = '0118-123456';
    $campaign2->contact_email = 'customer@support.nl';
    $campaign2->startDateTime = $dateNow;
    $campaign2->endDateTime = $dateNow;
    $campaign2->image = '0';
    $campaign2->save();

    $campaign3 = new Campaign();
    $campaign3->business_id = $DefaultBusiness->id;
    $campaign3->title = 'Q-Reizen';
    $campaign3->description = 'Op reis naar Afrika!';
    $campaign3->city = 'Vlissingen';
    $campaign3->postal_code = '4384 CK';
    $campaign3->contact_name = 'Kered EttiweD';
    $campaign3->contact_phone = '06-28407812';
    $campaign3->contact_phone2 = '0118-123456';
    $campaign3->contact_email = 'customer@support.nl';
    $campaign3->startDateTime = $dateNow;
    $campaign3->endDateTime = $dateNow;
    $campaign3->image = '0';
    $campaign3->save();

    $campaign4 = new Campaign();
    $campaign4->business_id = $DefaultBusiness->id;
    $campaign4->title = 'Mode campagne';
    $campaign4->description = 'Voor ons merk Mango!';
    $campaign4->city = 'Vlissingen';
    $campaign4->postal_code = '4384 CK';
    $campaign4->contact_name = 'Kered EttiweD';
    $campaign4->contact_phone = '06-28407812';
    $campaign4->contact_phone2 = '0118-123456';
    $campaign4->contact_email = 'customer@support.nl';
    $campaign4->startDateTime = $dateNow;
    $campaign4->endDateTime = $dateNow;
    $campaign4->image = '0';
    $campaign4->save();

    $campaign5 = new Campaign();
    $campaign5->business_id = $DefaultBusiness->id;
    $campaign5->title = 'Promotie restaurant Zillertal';
    $campaign5->description = 'Witte sneeuw in het restaurant!';
    $campaign5->city = 'Vlissingen';
    $campaign5->postal_code = '4384 CK';
    $campaign5->contact_name = 'Kered EttiweD';
    $campaign5->contact_phone = '06-28407812';
    $campaign5->contact_phone2 = '0118-123456';
    $campaign5->contact_email = 'customer@support.nl';
    $campaign5->startDateTime = $dateNow;
    $campaign5->endDateTime = $dateNow;
    $campaign5->image = '0';
    $campaign5->save();

    $campaign6 = new Campaign();
    $campaign6->business_id = $DefaultBusiness->id;
    $campaign6->title = 'Suppen in het kanaal';
    $campaign6->description = 'Promoot ons sup-bedrijf!';
    $campaign6->city = 'Vlissingen';
    $campaign6->postal_code = '4384 CK';
    $campaign6->contact_name = 'Kered EttiweD';
    $campaign6->contact_phone = '06-28407812';
    $campaign6->contact_phone2 = '0118-123456';
    $campaign6->contact_email = 'customer@support.nl';
    $campaign6->startDateTime = $dateNow;
    $campaign6->endDateTime = $dateNow;
    $campaign6->image = '0';
    $campaign6->save();


    $CampaignSignUp = new CampaignSignUp();
    $CampaignSignUp->campaign_id = $DefaultBusiness->id;
    $CampaignSignUp->influencer_id = 1;
    $CampaignSignUp->startDateTime = $dateNow;
    $CampaignSignUp->endDateTime = $dateNow;
    $CampaignSignUp->save();


    }
}
