<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login(){
        return 'login';
    }

    public function login_check(){
        return json_encode(array('status' => 'login check') ,true);
    }
	
	
	public function register(){
        return 'register';
    }
	
	public function register_check(){
        return json_encode(array('status' => 'register check') ,true);
    }
	
	public function forget(){
        return 'forget password';
    }
	
	public function reset_password(){
        return json_encode(array('status' => 'reset password') ,true);
    }
}
