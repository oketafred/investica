<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sentinel;
use Validator;
use Session;
use App\User;
use App\Property;

class AdminController extends Controller
{

    public function adminDashboard(){
        
        $clients = Sentinel::findRoleBySlug('client')->users()->with('roles')->get();

        $vendors = Sentinel::findRoleBySlug('vendor')->users()->with('roles')->get();

        $properties = Property::all();

        $approvedProperties = Property::where('published', '=', true);

        return view('admin.admin-dashboard', compact('clients', 'vendors', 'properties', 'approvedProperties'));
    }

    public function getAllVendors(){

        $vendors = Sentinel::findRoleBySlug('vendor')->users()->with('roles')->get();

    	return view('admin.vendors.index', compact('vendors'));
    }

    public function addVendors(){
    	return view('admin.vendors.create');
    }

    public function getAllBuyers(){

        $clients = Sentinel::findRoleBySlug('client')->users()->with('roles')->get();

        return view('admin.buyers', compact('clients'));

    }

    // Register Buyer Form
    public function getRegisterVendor(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required',
    		'full_name' => 'required',
    		'password' => 'required'
        ]);

        if ($validator->fails()) {
                
            Session::flash('error', 'Please Check your Inputs');

            return redirect()->back();
        }


    	$credentials = [
		    'email'    => $request->email,
		    'full_name' => $request->full_name,
		    'password' => $request->password,
            'vendor_code' => $this->generateVendorCode()
		];

    	$user = Sentinel::registerAndActivate($credentials);

        $role = Sentinel::findRoleBySlug("vendor");

        $role->users()->attach($user);

        Session::flash('success', 'A New Vendor Added Registration Successful.');

    	return redirect()->back();


    }

    public function all_properties(){

        $all_properties = Property::all();

        return view('admin.properties.all_properties', compact('all_properties'));
    }

    public function approved(){

        $approvedProperties = Property::where('published', '=', true)->get();

        return view('admin.properties.approved_properties', compact('approvedProperties'));
    }

    public function unapproved(){

        $unApprovedProperties = Property::where('published', '=', false)->get();

        return view('admin.properties.unapproved_properties', compact('unApprovedProperties'));
    }

    public function bought(){
        return view('admin.properties.bought_properties');
    }

    public function propertyDetail($id){

        $property = Property::findOrFail($id);

        return view('admin.properties.property_details', compact('property'));
    }

    public function published(Request $request, $id){
        
        $property_published = Property::findOrFail($id);

        $property_published->published = 1;

        $property_published->save();

        return redirect()->back();

    }

    public function unpublished(Request $request, $id){
        
        $property_unpublished = Property::findOrFail($id);

        $property_unpublished->published = 0;

        $property_unpublished->save();

        return redirect()->back();

    }

    public function generateVendorCode()
    {
        // Get User by Role and Count the Number of Users.
        $count = Sentinel::findRoleBySlug('vendor')->users()->with('roles')->count() + 1;
        // $count = User::count() + 1;

        if ($count < 10) {
            $c = '000' . $count;
        }elseif ($count >= 10 && $count < 100){
            $c = '00'.$count;
        }elseif ($count >= 100 && $count < 1000){
            $c = '0'.$count;
        }else{
            $c = $count;
        }
        return 'INVESTICA_' . date('Ymd') . '_' .$c;
    }


}
