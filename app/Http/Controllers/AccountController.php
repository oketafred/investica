<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Sentinel;
use Validator;
use Activation;
use Session;
use Mail;
use App\User;

class AccountController extends Controller
{
    public function getLogin(){

    	return view("login");

    }


    public function processLogin(Request $request){

		try{

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if ($validator->fails()) {

                Session::flash('error', 'All Fields are Required!');

                return redirect()->back();
            }

	        if (Sentinel::authenticate($request->all())) {
	            $slug = Sentinel::getUser()->roles()->first()->slug;

	            if ($slug == "admin") {
	                return redirect()->route('admin-dashboard');
	            }elseif ($slug == "client") {
	                return redirect()->route('client-dashboard');
	            }elseif ($slug == "vendor") {
	            	return redirect()->route('vendor-dashboard');
	            }
	        }else{
                
                Session::flash('error', 'Wrong Credentials!');

                return redirect()->back();
                
            }

        }catch(ThrottlingException $ex){
            $delay = $ex->getDelay()/60;

            Session::flash('error', "You have been locked out. For $delay");

            return redirect()->back();
            
        }catch(NotActivatedException $ex){

            Session::flash('error', 'You account is not activated! Please check your Email');

            return redirect()->back();

        }

	}


    // Logout
	public function logout(){

    	Sentinel::logout();

    	return redirect('/');

    }

     // Register Buyer Form
    public function getRegister(){

    	return view('register');

    }


    // Process Register
    public function postRegister(Request $request){
    	
    	$validator = Validator::make($request->all(), [
            'email' => 'required',
    		'full_name' => 'required',
    		'password' => 'required'
        ]);

        if ($validator->fails()) {

            Session::flash('error', 'All Fields are Required!');

            return redirect()->back();
        }


    	$credentials = [
		    'email'    => $request->email,
		    'full_name' => $request->full_name,
		    'password' => $request->password,
		];

        // dd($credentials);

    	$user = Sentinel::register($credentials);

        $activation = Activation::create($user);

        $role = Sentinel::findRoleBySlug("client");

        $role->users()->attach($user);

        $this->sendEmail($user, $activation->code);

        Session::flash('success', 'Registration Successful. Please Check your Email');

    	return redirect("/login");

    }

    private function sendEmail($user, $code){

        Mail::send('emails.activation', [
            'user' => $user,
            'code' => $code
        ], function($message) use ($user){
            $message->to($user->email);

            $message->subject("Hello $user->first_name, Activate your Account");
        });

    }

}
