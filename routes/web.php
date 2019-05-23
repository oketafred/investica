<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'visitors'], function(){
	Route::get('login', 'AccountController@getLogin')->name("login");
	Route::post('login', 'AccountController@processLogin')->name("login");

	Route::get('register', 'AccountController@getRegister')->name("register");
	Route::post('register', 'AccountController@postRegister')->name("register");

	Route::get('activate/{email}/{activationCode}', 'ActivationController@activate')->name("activation");
});

Route::group(['middleware' => 'admin.check'], function(){
	Route::get('/', 'FrontendController@index')->name("index");


	Route::get('faq', function(){
		return view('faq');
	})->name("faq");

	Route::get('contact', function(){
		return view('contact');
	})->name("contact");

	Route::get('list-of-properties', 'FrontendController@propertyList')->name("list-of-properties");

	Route::get('property-detail/{id}', 'FrontendController@propertyDetail')->name("property-detail-info");

	Route::post('search', 'FrontendController@search')->name('search');

});


Route::group(['middleware' => 'auth.client.vendor'], function(){
	Route::get('property-detail/{id}', 'FrontendController@propertyDetail')->name("property-detail-info");
});




Route::post('logout', 'AccountController@logout')->name("logout");

Route::group(['prefix' => 'clients', 'middleware' => 'clients'], function(){
	Route::get('dashboard', 'ClientController@getProperties')->name('client-dashboard');

	Route::get('bookmark_list', function(){
		return view('clients.client_bookmark_list');
	})->name('bookmark_list');

	Route::get('change_password', function(){
		return view('clients.client_changepassword');
	})->name('client_change_password');

	Route::get('my_profile', function(){
		return view('clients.profile');
	})->name('my_profile');

});


Route::group(['prefix' => 'vendors', 'middleware' => 'vendors'], function(){
	Route::get('dashboard', 'VendorController@getAllProperties')->name('vendor-dashboard');

	Route::get('add_property', 'PropertyController@create')->name('add_property');
	Route::post('add_property', 'PropertyController@store')->name('store_property');

	Route::get('bookmark_list', function(){
		return view('vendors.vendor_bookmark_list');
	})->name('vendor_bookmark_list');

	Route::get('change_password', function(){
		return view('vendors.vendor_changepassword');
	})->name('change_password');

	Route::get('profile', function(){
		return view('vendors.profile');
	})->name('profile');

});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
	Route::get('dashboard', 'AdminController@adminDashboard')->name('admin-dashboard');

	Route::get('vendors', 'AdminController@getAllVendors')->name('all_vendors');
	Route::get('add_vendors', 'AdminController@addVendors')->name('add_vendors');
	Route::post('add_vendors', 'AdminController@getRegisterVendor')->name('add_vendors');

	Route::get('buyers', 'AdminController@getAllBuyers')->name('buyers');

	// Properties Managemenet
	Route::get('all_properties', 'AdminController@all_properties')->name('all_properties');
	Route::get('approved', 'AdminController@approved')->name('approved');
	Route::get('unapproved', 'AdminController@unapproved')->name('unapproved');
	Route::get('bought', 'AdminController@bought')->name('bought');
	Route::get('property_detail/{id}', 'AdminController@propertyDetail')->name('property_detail');

	Route::get('property/published/{id}', 'AdminController@published')->name('property.published');
	Route::get('property/unpublished/{id}', 'AdminController@unpublished')->name('property.unpublished');

});


