<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignSignUp extends Model
{
    public function campaign() {
        return $this->belongsTo(Campaign::class);
    }

  public function influencer() {
       return $this->hasMany(influencer::class);
    }

}
