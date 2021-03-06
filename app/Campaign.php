<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaign';
    // protected $fillable = [
    // 	'E-mail',
    // //     'aanmeldings_type_id',
    // //     'ingevuld_door'
    // // ];

    public function business() {
        return $this->belongsTo(Business::class);
    }

    public function campaignsignup() {
       return $this->hasMany(Campaign::class, 'campaign_id');
    }

    
}
