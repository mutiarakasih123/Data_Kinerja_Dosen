<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TUController extends Controller
{
    
    public function viewReportkegiatan()
    {
		$reports = DB:: select('SELECT `id_reportkegiatan`, tblunsur.nama_unsur, tblsubunsur.nama_subunsur, tblkegiatan.nama_kegiatan FROM `tblreportkegiatan` 
		LEFT JOIN tblunsur on tblunsur.id_unsur = tblreportkegiatan.id_unsur 
		left JOIN tblsubunsur on tblsubunsur.id_subunsur = tblreportkegiatan.id_subunsur
		left join tblkegiatan on tblkegiatan.id_kegiatan = tblreportkegiatan.id_kegiatan');

		return view('tu.tu-subkegiatan')->with('reports', $reports); 		
		 
   
		
	}
	
}