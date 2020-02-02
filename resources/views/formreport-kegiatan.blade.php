<?php

$elements = DB::select("select * from tblUnsur");


?>

<!doctype html>
<html lang="en">
<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link rel="stylesheet" href="/dist/css/dashboard.css" />
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>		
			<title>Tata Usaha</title>
  
    <style>
		.bd-placeholder-img {
		 font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
		 user-select: none;
      }

		@media (min-width: 768px) {
		.bd-placeholder-img-lg {
		.bd-placeholder-img-lg {
         font-size: 3.5rem;
      }
      }
    </style>
	
			<!-- Custom styles for this template -->
			<link href="dashboard.css" rel="stylesheet">
</head>

<body>
      <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Data Kinerja Dosen</a>
			<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
			<a class="nav-link" href="#">Sign out</a>
			</li>
			</ul>
	  </nav>
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
			<span>Menu Kegiatan</span>
			<a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
			</a>
		</h6>
			
		<ul class="nav flex-column">
			<li class="nav-item">
            <a class="nav-link" href="/tu-subkegiatan">
            <span data-feather="users"></span>Pelaksanaan Pendidikan</a>
        </ul>
		
		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
			<span>History</span>
			<a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
			</a>
		</h6>
	
		<ul class="nav flex-column">
		<li class="nav-item">
            <a class="nav-link" href="/riwayat-kegiatan">
             <span data-feather="users"></span>History</a>
        </li>
		
          </div>
	   </nav>
    
	   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-2">
	   <form>
	   <div class="form-group">
			<label >Unsur</label>
			<select  class="form-control" id="unsur" >
			<?php
				for($i = 0; $i < count($elements); $i++){
				  echo('<option value="'.$elements[$i]->id_unsur.'">'. $elements[$i]->nama_unsur .'</option>');
				}
				?>
			</select>
		</div>
		<div class="form-group">
			<label >Sub Unsur</label>
			<select id="subunsur" class="form-control">
	  			<option>Pendidikan</option>
			</select>
		</div>
	   </form>
	   </main>
	   <script>
let unsur = document.querySelector("#unsur")
let subunsur = document.querySelector("#subunsur")

unsur.onchange = function(){
fetch("/getSubUnsurByunsurId/"+ unsur.value)
.then(res => res.json())
.then(res => {
	$("#subunsur").empty()
	 res.forEach(x => {
	let option = new Option(x.nama_subunsur, x.id_subunsur);
	subunsur.options.add(option)
	})
})
}
	   </script>