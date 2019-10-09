<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'Business';
    protected $fillable = [
    	'voornaam',
        'achternaam',
        'telefoonnummer',
        'instagram_name',
        'leeftijd',
        'volgers',
        'email'
    ];


    public function campaign() {
       return $this->hasMany(Campaign::class, 'business_id');
    }
}
