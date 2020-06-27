<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Location extends Model{

    protected $fillable = ['latitude', 'longitude','country_id'];

    public function Country(){
        return $this->belongsTo(Country::class);
    }
}
