<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Date;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{ 
    public function viewLogin()
    {
         return view('login');			
    }
	public function onRegisterDosen(Request $request){
		$nama = $request->input('nama') ;
		$tgl_lahir = $request->input('tgl_lahir') ;
		$email = $request->input('email') ;
		$nip = $request->input('nip') ;
		$jabatan = $request->input('jabatan') ;
		$prodi = $request->input('prodi') ;
		$password = $request->input('password') ;
		$ulangi_password = $request->input('ulangi_password') ;
			$values = [null, $nama, $nip, $jabatan, $tgl_lahir, $prodi, $email, $password, 1];
					$isSuccessSave = DB::insert('insert into tblUser (id_user, nama, nip, jabatan, tgl_lahir, prodi, email, password, id_akses ) 
                        values (?, ?, ?, ?, ?, ?, ?, ?, ?)', $values);
	}
	public function onLogin(Request $request){
		$email = $request->input('email'); 
		$password = $request->input('password');
		$user = DB::select ('SELECT tbluser.id_user, tbluser.email, tbluser.password, 
				tblakses.nama as accesName, tblakses.id_akses as accessId from tbluser 
				INNER JOIN tblakses on tbluser.id_akses WHERE email = ? LIMIT 1', [$email]);
		if (count($user) > 0){
			$user = $user[0];
			if(Hash::check($password, $user->password)){
				echo("login <br/>");
				session(['id_user' => $user->id_user]);
				session(['username' => $user->email ]);
				session(['accessId' => $user->accesName ]);
			if ($user[0]->id_akses == 1){
				return redirect('/dosen');
			}else if ($user[0]->id_akses == 2){
				return redirect('/tu');
			}else if($user(0)->id_akses == 3) {	
				return redirect('/admin');
			}
			
		}else{
				return view('tu.tu-navbar')->with('message', 'Password salah');
		}
		}else{
				return view('tu.tu-navbar')->with('message', 'Username Tidak Tersedia');
		}
	}	
	public function viewnavbar()
	{
		return view('tu-navbar');
	}
	public function login(Request $request)
	{
        $email = $request->input('email');
        $pasword = $request->input('password');
        $users = DB::select('SELECT tbluser.id_user, tbluser.email, tbluser.password, 
                            tblakses.nama as accessname, tblakses.id_akses as accessid from tbluser 
                            inner join tblakses on tbluser.id_akses = tblakses.id_akses where email = ? LIMIT 1', [$email]);
        if(count(user) > 0){
            $user = $user[0];
            if(Hash::check($password, $user->password)){
                echo("login </>");
                session(['userid' => $user->id_user ]);
                session(['email' => $user->email ]);
                session(['aksesid' => $user->id_user ]);
                if($user->accessid == 1){
                    return redirect('/login');
                }else{
                    return redirect('/');
                }

            }else {
                return view('login')->with('message', 'Password salah');
			}
        }else {
            return view('login')->with('message', 'Username Tidak Tersedia');
        }
    }
	public function onInputData(Request $request){
			$jurusan = $request->input('nama') ;
			$prodi = $request->input('prodi') ;
			$tahun_ajaran = $request->input('tahun_ajaran') ;
			$semester = $request->input('semester') ;
			$no_sertifikat = $request->input('no_sertifikat') ;
				$values = [null, $jurusan, $prodi, $tahun_ajaran, $semester, $no_sertifikat];
					$isSuccessSave = DB::insert('INSERT INTO tblinput (id, jurusan, prodi, tahun_ajaran, semester, no_sertifikat) 
									values (?, ?, ?, ?, ?, ?)', $values);               
	}
	
	
}