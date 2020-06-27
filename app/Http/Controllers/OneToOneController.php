<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Country;
use App\Model\Location;

class OneToOneController extends Controller{

    public function oneToOne(){
        $country = Country::find(1);
        $location = $country->location;

        echo $location;
    }

    public function oneToOneInverse(){
        $latitude = 456;
        $longitude = 654;

        $location = Location::where('latitude', $latitude)
        ->where('longitude',$longitude)
        ->get()
        ->first();

        $country = $location->country()->get()->first();

        echo $country->name;
    }

    public function oneToOneInsert(){

        $data = [
            'name' => 'Belgica',
            'latitude' => 547,
            'longitude' => 265
        ];

        // $data['country_id'] = $country->id; 
        // $location = Location::create($data);

        $country = Country::create($data);
        $country->location()->create($data);
    }
}
