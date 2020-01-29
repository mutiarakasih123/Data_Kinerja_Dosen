<!doctype html>
<html lang="en">
  <head>
     <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="/dist/css/dashboard.css" />
		
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
			<a class="nav-link" href="#">Sign out</a></li>
		</ul>
	</nav>


  <div class="row">
  @include('tu.tu-navbar') 
  
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="container-fluid">
		<form class="mt-3" action="/diklat-prajabatan" method="POST">
		@csrf
		<center> <h5> Input Detail Pengajaran </h5> </center>
		   
    <div class="form-group row">
		<label  class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
		<div class="col-sm-10">
		<input type="varchar"  class="form-control" "="" style=" width: 50%;">
    </div>
    </div>
	
	<div class="form-group row">
		<label  class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
		<div class="col-sm-10">
		<input type="varchar"  class="form-control" "="" style=" width: 50%;">
    </div>
    </div>
	
		<html>
<!-- <head>
	<title>Membuat Kalkulator Sederhana Dengan PHP | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
	<th> <h6 class="judul">SKS</h6> </th>
	<h6 class="judul">SESI</h6> 
		<form method="post" action="#">			
		<br> SKS TEORI : <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama"> 
		<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua"> </br>
		SKS PRAKTIK : <input type="text" name="bil3" class="bil" autocomplete="off" placeholder="Masukkan Bilangan tiga">
		<input type="text" name="bil4" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Empat">
			
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html> -->

<body>


    <table rules="none">
	<thead>
<tr>
	<th></th>
	<th>Sks</th>
	<th>Sesi</th>
</tr>
</thead>
    <tbody>
       <tr>
           <td>Sks Teori</td>
           <td><input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Jumlah SKS"> </td>
           <td><input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Isi Jumlah Sesi"> </td>
       </tr>
       <tr>
           <td>Sks Praktek</td>
           <td><input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Jumlah SKS"> </td>
           <td><input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Isi Jumlah sesi"> </td>
       </tr>
</tbody>
</table>
</body>
	<td>
		<a class="btn btn-sm btn-primary" href="" style=" margin-left: 475px;">Simpan</a>
		<a class = "btn btn-sm btn-primary" href="#">Batal</a>
	</td>

	
			</form>
		</main>
	</div>
</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

	</body>
</html>
