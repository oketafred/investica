<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use Validator;
use Sentinel;
use Session;
use Image;

class PropertyController extends Controller
{
    public function create(){

    	return view('vendors.property.create');
    	
    }

    public function store(Request $request){

    	// dd($request->all());
    	
    	// $validator = Validator::make($request->all(), [
     //        'property_title' => 'required',
    	// 	'property_status' => 'required',
    	// 	'property_type' => 'required',
	    // 	'property_price' => 'required',
	    // 	// 'property_area' => 'required',
	    // 	'property_rooms' => 'required',
	    // 	'property_images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	    // 	'property_address' => 'required',
	    // 	'property_city' => 'required',
	    // 	'property_state' => 'required',
	    // 	'property_country' => 'required',
	    // 	// 'property_age' => 'required',
	    // 	'property_bedrooms' => 'required',
	    // 	'property_bathrooms' => 'required'
     //    ]);

     //    if ($validator->fails()) {

     //        Session::flash('error', 'Please enter the required fields');

     //        return redirect()->back();
     //    }

        $this->validate($request, [
            'property_title' => 'required',
            'property_status' => 'required',
            'property_type' => 'required',
            'property_price' => 'required',
            // 'property_area' => 'required',
            'property_rooms' => 'required',
            'property_images' => 'required|max:2048',
            'property_address' => 'required',
            'property_city' => 'required',
            'property_state' => 'required',
            'property_country' => 'required',
            // 'property_age' => 'required',
            'property_bedrooms' => 'required',
            'property_bathrooms' => 'required',
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_number' => 'required'
        ]);

    	$property = new Property;

    	// Storing Images 

    	if($request->hasfile('property_images'))
         {

            foreach($request->file('property_images') as $image)
            {

            	$filename = time(). '.' .$image->getClientOriginalExtension();
		        $location = public_path('properties/' . $filename);
		        Image::make($image)->resize(800, 400)->save($location);

		        $data[] = $filename;

            }
         }


    	$property->property_title = $request->property_title;
    	$property->status = $request->property_status;
    	$property->type = $request->property_type;
    	$property->price = $request->property_price;
    	$property->area = $request->property_area;
    	$property->rooms = $request->property_rooms;
    	$property->gallery = json_encode($data);
    	$property->address = $request->property_address;
    	$property->city = $request->property_city;
    	$property->state = $request->property_state;
    	$property->country = $request->property_country;
    	$property->building_age = $request->property_age;
    	$property->bed_rooms = $request->property_bedrooms;
    	$property->bath_rooms = $request->property_bathrooms;
        $property->air_condition = (Boolean)$request->air_condition;
        $property->swimming_pool = (Boolean)$request->swimming_pool;
        $property->central_heating = (Boolean)$request->central_heating;
        $property->laundry_room = (Boolean)$request->laundry_room;
        $property->gym = (Boolean)$request->gym;
        $property->alarm = (Boolean)$request->alarm;
        $property->window_covering = (Boolean)$request->window_covering;
            
        $property->owner_fullname = $request->contact_name;
        $property->owner_email = $request->contact_email;
        $property->owner_phone = $request->contact_number;
    	$property->user_id = Sentinel::getUser()->id;

    	$property->save();

        Session::flash('success', 'A New Property Added Successfully');

    	return redirect()->back();

    }
}
