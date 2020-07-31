<?php

namespace App\Http\Controllers;

use App\Models\RegAuth;	
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reg_AuthController extends Controller{

	public function regestration() {

		return view ('template.reg');
		
	}

	public function authsubmit(Request $req) {

		$RegAuth = new RegAuth();
		$login_f = $req->input('login');
		$password_f = $req->input('password');
		$password_f = md5($password_f);
		$result = DB::table('register')->where ( 'password', $password_f)->where ( 'login', $login_f);
		$login_b=$result->value('login');
		$password_b=$result->value('password');
		$authcook= rand();

		if (isset($password_b) AND isset($login_b) ) {
			setcookie("auth", $authcook, time()+3600);
			return redirect()->route('home');
		}
		else {
			echo "Користувача не знайдено";
		};
 		
		
	}

	public function exit(){

		setcookie("auth", '', time()-3600);
		return redirect()->route('home');

	}

}