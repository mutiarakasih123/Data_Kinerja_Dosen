<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function viewLogin()
    {
         return view('login');			
    }
	public function onLogin(Request $request){
		$username = $request->input('username'); 
		$password = $request->input('password');
		$user = DB::select ('SELECT * FROM `tbluser` 
							WHERE tbluser.email = ? AND tbluser.password=?', [$username, $password]);
		if (count($user)){
			return redirect('/');
		}
		var_dump ($user);
		
	}
}