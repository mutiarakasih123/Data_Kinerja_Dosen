<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
    public function viewUsers()
    {
		$users = DB::select("SELECT tbluser.nama,tbluser.email,tblakses.nama as hak_akses FROM `tbluser`
							left join tblakses on tbluser.id_akses = tblakses.id_akses
							group by tbluser.id_user");
							
         return view('admin.list')-> with ('users', $users);		
		 
   
		
	}
	
}