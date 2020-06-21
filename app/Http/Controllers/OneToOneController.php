<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Country;
use App\Model\Location;

class OneToOneController extends Controller{

    public function oneToOne(){
        $country = Country::find(1);
        $location = $country->location;
    }
}
