<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use Sentinel;

class VendorController extends Controller
{
    public function getAllProperties() {

    	$properties = Property::all()->where('user_id', '=', Sentinel::getUser()->id);

    	return view('vendors.vendor-dashboard', compact('properties'));
    }
}
