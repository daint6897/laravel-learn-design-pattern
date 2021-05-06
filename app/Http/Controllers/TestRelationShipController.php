<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Country;
use \App\Models\User;

class TestRelationShipController extends Controller
{
    //
    public function HasManyThrough()
    {
        // $postsByCountry =  Country::where('name','Prof. Collin Kohler Jr.');
        $postsByCountry =  Country::first();
        // $postsByCountry =  Country::find(1)->posts->toArray();
        dd($postsByCountry->posts->toArray());
    }
}
