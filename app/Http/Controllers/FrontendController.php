<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class FrontendController extends Controller
{
    
	public function index () {

		$newly_added_properties = Property::orderBy('id', 'DESC')
                                    ->where('published', '=', true)
                                    ->get();

		$uganda = Property::where('country', '=', 'Uganda')
                                    ->where('published', '=', true)
                                    ->get();

		$kenya = Property::where('country', '=', 'Kenya')->get();

		$tanzania = Property::where('country', '=', 'Tanzania')->get();

		$drc = Property::where('country', '=', 'Zaire')->get();

		$rwanda = Property::where('country', '=', 'Rwanda')->get();

		$southsudan = Property::where('country', '=', 'South Sudan')->get();

		$burundi = Property::where('country', '=', 'Burundi')->get();

	    return view('index', compact('newly_added_properties', 'uganda', 'kenya', 'tanzania', 'drc', 'rwanda', 'southsudan', 'burundi'));
	}

    public function propertyList(){

    	$all_properties = Property::orderBy('id', 'DESC')
                                ->where('published', '=', true)
                                ->paginate(10);

    	return view('property_list', compact('all_properties'));

    }

    public function propertyDetail(Request $request, $id){

    	$property = Property::findOrFail($id);

    	return view('property_detail_info', compact('property'));
    }


    public function search(Request $request){
    	// dd($request->all());

    	$search = Property::where('published', '=', true)
                            ->where('address', 'LIKE', '%'. $request->address. '%')
                            ->where('city', '=', $request->city)
                            ->where('country', '=', $request->country)
                            ->orWhere('status', '=', $request->status)
                            ->orWhereBetween('price', [$request->price_min, $request->price_max])
                            ->orWhereBetween('area', [$request->area_min, $request->area_max])
                            ->orWhere('bed_rooms', '=', $request->bed_rooms)
                            ->orWhere('bath_rooms', '=', $request->bath_rooms)
                            ->paginate(10);


    	$query = $request->address;

        // dd($search);


    	return view('result', compact('search', 'query'));

    }
}
