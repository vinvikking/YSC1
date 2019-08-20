<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    protected $table = 'influencers';
    protected $fillable = [
    	'voornaam',
        'achternaam',
        'telefoonnummer',
        'instagram_name',
        'leeftijd',
        'volgers',
        'email'
    ];


    public function user() {
        return $this->morphOne(User::class, 'imageable');
    }


    

}
