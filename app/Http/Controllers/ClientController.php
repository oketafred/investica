<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class ClientController extends Controller
{
    public function getProperties(){

    	$all_properties = Property::orderBy('id', 'DESC')
                            ->where('published', '=', true)
                            ->get();

		return view('clients.client-dashboard', compact('all_properties'));
	}
}
