<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model{

    public function Location(){
        return $this->hasOne(Location::class);
    }
}
