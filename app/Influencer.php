<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    protected $table = 'influencers';
    protected $fillable = [
        'user_id',
    	'voornaam',
        'achternaam',
        'telefoonnummer',
        'instagram_name',
        'leeftijd',
        'volgers',
        'email'
    ];


    public function user1() {
        return $this->morphOne(User::class, 'imageable');
    }

    public function user(){
        return $this->belongsTo('App/User');
    }

    public function CampaignSignUp() {
       return $this->hasMany(CampaignSignUp::class, 'Influencer_id');
    }
}
