<?php namespace AmSimulador2\Http\Controllers;

use AmSimulador2\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Form;
use Session;
use Redirect;
use Response;
use Validator;
use DB;
use AmSimulador2\User;


class WelcomeController  extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index($string=null){ 
    	return view('welcome');
    }
	/**
	 * Guarda el preregistro de usuarios
	 *
	 * @return Response
	 */
    public function saveRegister(Request $request){
        $validator = Validator::make($request->all(), ['name'=>'required','lastname'=>'required','email'=>'required|email|unique:users,email','tyc'=>'required']);  
		if($validator->fails()) {
            return Redirect::to('/')->withInput()->withErrors($validator);
	    }else{     
			$users = new User;
          	$users->id = $users->getKey(); 
          	$users->name = $request->input('name');
          	$users->lastName = $request->input('lastname');
          	$users->email =$request->input('email');
          	$users->register = 1;
            $users->save(); 
            Session::flash('success', 'Gracias por tu registro, ¡Felicidades! Serás de los primeros en recibir información.'); 
            return Redirect::to('/');	
		}
	}
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function indice($string=null){ 
    	return view('index');
    }
}
