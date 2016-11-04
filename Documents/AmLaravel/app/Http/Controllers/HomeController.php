<?php namespace AmSimulador2\Http\Controllers;

use AmSimulador2\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use AmSimulador2\User;
use AmSimulador2\Votos;
use Redirect;
use DB;
use Session;
use Response;
use Form;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Socialite $socialite)
	{
		$this->socialite = $socialite;
	}

	/**
	 * Muestra la página de inicio
	 *
	 * @return Response
	 */
	public function index(){
		if(Session::has('id')){
	    	$register = Session::get('register');
	    	if($register == 1){
				$id = Session::get('id');
				$user = DB::select('select * from users where id ='.$id); 
				$actualTime = date("Y-m-d H:i:s");
				$fecha_inicio_promo = "2016-10-30 13:55:00";
				$fecha_fin_promo = "2017-10-30 00:00:01";
	       		$preHourDiff = round((strtotime($actualTime) - strtotime($fecha_inicio_promo))/3600, 1);
	       		$postHourDiff = round((strtotime($fecha_fin_promo) - strtotime($actualTime))/3600, 1);	
	       		if($preHourDiff > 0 && $postHourDiff > 0) {   
	       			$userpoints = $user[0]->points + $user[0]->actionpoints;
	       			$user[0]->points = $userpoints;	
	       			Session::put('end',0);
	       		}	
				$this->data['user'] = $user;
				return view('home', $this->data);
			}else{
	       		if($preHourDiff > 0 && $postHourDiff > 0) {   
	       			$userpoints = $user[0]->points + $user[0]->actionpoints;
	       			$user[0]->points = $userpoints;	
	       			Session::put('end',0);
	       			return Redirect::route('userProfile');
	       		}else{
					return Redirect::route('game');
				}
			}
		}else{
			Session::flash('error', 'You need to login to see this page.');
			return Redirect::route('logout');
		}
	}

	/**
	 * Muestra la página de inicio
	 *
	 * Login con facebook
	 */
    public function redirect($provider=null){
       	if(!config("services.facebook")) abort('404'); //just to handle providers that doesn't exist
       	Session::put('provider',$provider);
       	unset($provider);
       	if(isset($string)){
	        Session::put('friend',$string);
	        unset($string);        
           	$id = Session::get('id');
           	$friend = Session::get('friend');
			$actualTime = date("Y-m-d H:i:s");
			$fecha_inicio_promo = "2016-10-30 13:55:00";
			$fecha_fin_promo = "2017-10-30 00:00:01";
       		$preHourDiff = round((strtotime($actualTime) - strtotime($fecha_inicio_promo))/3600, 1);
       		$postHourDiff = round((strtotime($fecha_fin_promo) - strtotime($actualTime))/3600, 1);	
       		if($preHourDiff > 0 && $postHourDiff > 0) {   
       			Session::put('end',0);
       		}
			// if(isset($friend) && $id == '' || $id == null){		
		 //        if(!is_numeric($friend)){
		 //            $userfriend = DB::select('select U.*, Y.picture as youtuberpic from users U left join influencers Y on Y.id=U.youtuber where U.string like "%'.$friend.'%"');
			// 		if($userfriend[0]->status == 1){
			// 			Session::flash('error', 'We are sorry, this is not a valid link anymore.');
			// 			return Redirect::route('/');
			// 		}else{
			// 			$adress = "http://$_SERVER[HTTP_HOST]";
			// 			$adress = $adress.'/mayanchallenge/'.$userfriend[0]->string;
			// 	        Session::put('adress', $adress);
			// 			Session::put('friend',$friend);
			// 	        unset($friend);  
			//         	if($userfriend[0]->youtuber == 0 || $userfriend[0]->youtuber == null || $userfriend[0]->youtuber == ''){
			//         		Session::pull('picture');
			//         	}elseif($userfriend[0]->youtuber == 1){
			//         		Session::put('picture',1);
			//         	}elseif($userfriend[0]->youtuber == 2){
			//         		Session::put('picture',2);
			//         	}elseif($userfriend[0]->youtuber == 3){
			//         		Session::put('picture',3);
			//         	}	
			// 	        Session::pull('registered');
			// 	        Session::pull('unregistered');
			// 	        Session::put('fb',0);			        	        
			// 	        if($userfriend[0]->points == null || $userfriend[0]->points == ''){
			// 	        	$userfriend[0]->points = 0;
			// 	        }   
			// 	        $this->data['user'] = $userfriend; 
			// 	    	return view('friend', $this->data);					
			// 		}
		 //        }else{
			// 		Session::flash('error', 'This link seems to be invalid.');
			// 		return Redirect::route('/');
		 //        }
		 //    }else{
		 //    	return Socialite::driver(Session::get('provider'))->redirect();
		 //    }
	    }else{
			return Socialite::driver(Session::get('provider'))->redirect();
		}
    }

	/**
	 * Muestra la página de inicio
	 *
	 * Login con facebook
	 */
    public function callback(){           	     	
		$actualTime = date("Y-m-d H:i:s");
		$fecha_inicio_promo = "2016-10-30 13:55:00";
		$fecha_fin_promo = "2017-10-30 00:00:01";
   		$preHourDiff = round((strtotime($actualTime) - strtotime($fecha_inicio_promo))/3600, 1);
   		$postHourDiff = round((strtotime($fecha_fin_promo) - strtotime($actualTime))/3600, 1);		
      	Session::pull('adress');
    	$adress = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        Session::put('adress', $adress); 
   		if($user = Socialite::driver(Session::get('provider'))->user()){  			
  			$already = DB::select('select id, email, status, string, register, points, actionpoints, youtuber from users where facebook_id like "'.$user->id.'" or twitter_id like "'.$user->id.'"');  
      		if($already == null || $already == '' ){
    //   			$friend = Session::get('friend');
    //   			if($friend != null || $friend != ''){		
			 //        if(!is_numeric($friend)){
			 //            $userfriend = DB::select('select U.id, U.points, U.status, Y.picture as youtuberpic from users U left join influencers Y on Y.id=U.youtuber where U.string like "%'.$friend.'%"');
			 //            if($userfriend[0]->status == 1){
				// 			Session::flash('error', 'We are sorry, this is not a valid link anymore.');
				// 			return Redirect::route('/');
				// 		}else{
				// 			if(Session::get('provider') == 'facebook'){	
				// 				$users = new User;
				// 	          	$users->id = $users->getKey(); 
				// 	          	$users->facebook_id = $user->id;
				// 	          	$users->name = $user->user['first_name'];
				// 	          	$users->lastName = $user->user['last_name'];
				// 	          	$users->email = $user->user['email'];
				// 	          	$users->register = 1;
				// 				$users->friend = $userfriend[0]->id;
				// 	          	$users->token = $user->token;
				// 	          	$users->avatar = $user->avatar;
				// 	            $users->save(); 

				// 		        $points = $userfriend[0]->points;
				// 		        $user = User::find($userfriend[0]->id); 
				// 		        $user->points = $points + 5;
				// 		        $user->save();
				// 		        $votos = new Votos;
				// 		        $votos->id_user = Session::get('id');
				// 		        $votos->id_amigo = $userfriend[0]->id;
				// 		        $votos->save();
				// 		   	}else{
				// 				$users = new User;
				// 	          	$users->id = $users->getKey(); 
				// 	          	$users->twitter_id = $user->id;
				// 	          	$users->nickname = $user->user['nickname'];
				// 	          	$users->name = $user->user['name'];
				// 	          	$users->email = $user->user['email'];
				// 	          	$users->register = 1;
				// 				$users->friend = $userfriend[0]->id;
				// 	          	$users->token = $user->token;
				// 	          	$users->avatar = $user->avatar_original;
				// 	            $users->save(); 

				// 		        $points = $userfriend[0]->points;
				// 		        $user = User::find($userfriend[0]->id); 
				// 		        $user->points = $points + 5;
				// 		        $user->save();
				// 		        $votos = new Votos;
				// 		        $votos->id_user = Session::get('id');
				// 		        $votos->id_amigo = $userfriend[0]->id;
				// 		        $votos->save();
				//     		} 
				// 	        Session::put('id',$users->id);		
				// 	        Session::put('email',$users->email);	
				// 	        Session::put('register', 1);
				// 	        Session::put('unregistered', 0);
				// 	        Session::pull('fb');
				//             Session::flash('success', 'Thanks for your vote.'); 
				//             return Redirect::to('friend');	
				//         }
				//     }
				// }else{
					if(Session::get('provider') == 'facebook'){	
			          	$users = new User;
			          	$users->id = $users->getKey(); 
			          	$users->facebook_id = $user->id;
			          	$users->name = $user->user['first_name'];
			          	$users->lastName = $user->user['last_name'];
			          	$users->email = $user->user['email'];
			          	$users->register = 1;
			          	$users->token = $user->token;
			          	$users->avatar = $user->avatar;
			            $users->save(); 
			        }else{
						$users = new User;
			          	$users->id = $users->getKey(); 
			          	$users->twitter_id = $user->id;
			          	$users->nickname = $user->nickname;
			          	$users->name = $user->name;
			          	$users->email = $user->email;
			          	$users->register = 1;
			          	$users->token = $user->token;
			          	$users->avatar = $user->avatar_original;
			            $users->save(); 				        	
			        }
		            Session::put('id',$users->id);		
		            Session::put('email',$users->email);	
		            Session::put('register', 1);
		            return Redirect::route('index');	
		        // }
	        }else{
		   		if($preHourDiff > 0 && $postHourDiff > 0) {   
					Session::put('end',0);
				}  
	        	Session::put('link',$already[0]->string);
      			$friend = Session::get('friend');
      			if($friend != null || $friend != ''){
			        if(!is_numeric($friend)){
			        	Session::pull('fb');
			            $userfriend = DB::select('select U.id, U.points, U.status, U.register, Y.picture as youtuberpic from users U left join influencers Y on Y.id=U.youtuber where U.string like "%'.$friend.'%"');
			            $same = DB::select('select count(*) as same from votos where id_user='.$already[0]->id.' and id_amigo ='.$userfriend[0]->id);
			            if($same[0]->same == 0 || $same[0]->same == null){
				            if($userfriend[0]->status == 1){
								Session::flash('error', 'We are sorry, this is not a valid link anymore.');
								return Redirect::route('/');
							}elseif($already[0]->status == 1){
							    Session::flash('error', 'We are sorry, your user is no longer valid.');
								return Redirect::route('/');
							}elseif($already[0]->string == $friend){
								if($userfriend[0]->register == 0){
								    $id = $already[0]->id;
								    $email = $already[0]->email;
						            Session::put('id', $id);		
						            Session::put('email', $email);
							        Session::pull('registered');
							        Session::pull('unregistered');
							        Session::pull('fb');
									Session::put('registered',0);
									Session::put('register',0);
								}elseif($userfriend[0]->register == 1){
								    $id = $already[0]->id;
								    $email = $already[0]->email;
						            Session::put('id', $id);		
						            Session::put('email', $email);
							        Session::pull('registered');
							        Session::pull('unregistered');
							        Session::pull('fb');
									Session::put('unregistered',0);
									Session::put('register',1);
								}
								Session::flash('error', 'Sorry, you cannot vote for yourself'); 
								return Redirect::to('friend');	
							}elseif($already[0]->string != $friend){
								if($already[0]->register == 1){
								    $id = $already[0]->id;
								    $email = $already[0]->email;
						            Session::put('id',$id);		
						            Session::put('email',$email);	
						            Session::put('register', 1);
						            $points = $userfriend[0]->points;
						            $user = User::find($userfriend[0]->id); 
						            $user->points = $points + 5;
						            $user->save();
						            $votos = new Votos;
						            $votos->id_user = Session::get('id');
						            $votos->id_amigo = $userfriend[0]->id;
						            $votos->save();
						            Session::put('unregistered',0);
							        Session::flash('success', 'Thanks for your vote.'); 
							        return Redirect::to('friend');										
								}elseif($already[0]->register == 0){        				        		
								    $id = $already[0]->id;
								    $email = $already[0]->email;
						            Session::put('id', $id);		
						            Session::put('email', $email);	
						            Session::put('register', 0);
						            $points = $userfriend[0]->points;
						            $user = User::find($userfriend[0]->id); 
						            $user->points = $points + 5;
						            $user->save();
						            $votos = new Votos;
						            $votos->id_user = Session::get('id');
						            $votos->id_amigo = $userfriend[0]->id;
						            $votos->save();
						            Session::put('registered',0);
							        Session::flash('success', 'Thanks for your vote.'); 
							        return Redirect::to('friend');					   
								}
							}
						}else{
							if($userfriend[0]->register == 0){
							    $id = $already[0]->id;
							    $email = $already[0]->email;
					            Session::put('id', $id);		
					            Session::put('email', $email);
							    Session::pull('registered');
							    Session::pull('unregistered');
							    Session::pull('fb');
								Session::put('registered',0);
								Session::put('register',0);
							}elseif($userfriend[0]->register == 1){
							    $id = $already[0]->id;
							    $email = $already[0]->email;
					            Session::put('id', $id);		
					            Session::put('email', $email);
							    Session::pull('registered');
							    Session::pull('unregistered');
							    Session::pull('fb');
								Session::put('unregistered',0);
								Session::put('register',1);
							}
				            if($userfriend[0]->status == 1){
								Session::flash('error', 'We are sorry, this is not a valid link anymore.');
								return Redirect::route('/');
							}elseif($already[0]->status == 1){
							    Session::flash('error', 'We are sorry, your user is no longer valid.');
								return Redirect::route('/');
							}elseif($already[0]->string == $friend){
								Session::flash('error', 'Sorry, you cannot vote for yourself'); 
								return Redirect::to('friend');		
							}else{
								Session::flash('error', 'We are sorry, you already voted for this friend.'); 
								return Redirect::to('friend');
							}
						}
				    }else{
				    	Session::flash('error', 'This link seems to be invalid.');
						return Redirect::route('/');
				    }
				}else{
					if($already[0]->status == 1){
					    Session::flash('error', 'We are sorry, your user is not valid anymore.');
						return Redirect::route('logout');
					}elseif($already[0]->register == 1){
						$adress = "http://$_SERVER[HTTP_HOST]";
						$link = Session::get('link');
						$adress = $adress.'/mayanchallenge/'.$link;
				        Session::put('adress', $adress);
					    $id = $already[0]->id;
					    $email = $already[0]->email;
			            Session::put('id', $id);		
			            Session::put('email', $email);
			            Session::put('register', 1);
						return Redirect::route('index');
					}else{        				        		
						$adress = "http://$_SERVER[HTTP_HOST]";
						$link = Session::get('link');
						$adress = $adress.'/mayanchallenge/'.$link;
				        Session::put('adress', $adress); 
					    $id = $already[0]->id;
					    $email = $already[0]->email;
					    Session::put('id',$id);
					    Session::put('email',$email);
					    Session::put('register', 0);
					    if($preHourDiff > 0 && $postHourDiff > 0) { 
					    	Session::flash('success', 'Sorry the contest is over. Thanks for your register.'); 
							Session::flash('error', 'Stay tuned on our Facebook fan page for The Mayan Challenge re-cap to find out who the winner is!'); 
					    	return Redirect::to('userProfile');
					    }else{
					    	return Redirect::route('game');
					    }					   
					}
				}
	        }       	        	 
        }else{
 			Session::flash('error', '¡Ups! algo salió mal.');
        }
    }
}