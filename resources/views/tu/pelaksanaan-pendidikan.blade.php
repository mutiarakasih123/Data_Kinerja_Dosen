
<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="/dist/css/dashboard.css" />
    <title>Pelaksanaan Pendidikan</title>
  
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
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>


  <div class="row">
  @include('tu.navbar') 
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
   <div class="container-fluid">
    <form class="mt-3">
	
  <center> <h5> Kegiatan Pelaksanaan Pendidikan </h5> </center>
  <div class="form-group row">
   <label  class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" "="" style="
    width: 50%;
">
   </div>
  </div>
  
   <div class="form-group row">
   <label  class="col-sm-2 col-form-label">Nip</label>
    <div class="col-sm-10">
      <input type="integer"  class="form-control" "="" style="
    width: 50%;
">
    </div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
      <input type="integer"  class="form-control" "="" style="
    width: 50%;
">
    </div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Prodi</label>
    <div class="col-sm-10">
      <input type="integer"  class="form-control" "="" style="
    width: 50%;
">
    </div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">No Sertifikat</label>
    <div class="col-sm-10">
      <input type="integer"  class="form-control" "="" style="
    width: 50%;
">
    </div>
  </div>
  
  <div class="form-group row">
             <div class="col-50">
                <label for="state">Tgl Mulai</label>
                <input type="date" id="date" name="date" placeholder="tanggal">

             </div>
             <div class="col-50">
                <label for="zip">Tgl Selesai</label>
                <input type="date" id="date" name="date" placeholder="">
          </div>
       </div>
  
  <div class="form-group row">
	<label class="col-sm-2" for="inlineFormCustomSelectPref">Sub Unsur Kegiatan</label>
		<select class="custom-select col-sm-2" id="inlineFormCustomSelectPref">
			<option selected> Pilih </option>
			<option value="1">Pendidikan Formal</option>
			<option value="2">Membina Kegiatan Mahasiswa</option>
			<option value="3">Melakukan Pengembangan Diri untuk meningkatkan kompetensi</option>
		</select>
  </div>
  
  
  
  <div class="form-group row">
	<label class="col-sm-2" for="inlineFormCustomSelectPref">Semester</label>
		<select class="custom-select col-sm-2" id="inlineFormCustomSelectPref">
			<option selected> Pilih </option>
			<option value="1">Genap</option>
			<option value="2">Ganjil</option>
		</select>
  </div>
  
  <div class="form-group row">
	<label class="col-sm-2" for="inlineFormCustomSelectPref">Tahun Ajaran</label>
		<select class="custom-select col-sm-2" id="inlineFormCustomSelectPref">
			<option selected> Pilih </option>
			<option value="1">2019/2020</option>
			<option value="2">2020/2021</option>
		</select>
  </div>

<label class="p-3 rounded text-center" style="border: 4px dotted #ccc;width: 300px; right: 200px; cursor: pointer;padding: inherit;margin-top: 10px;margin-right: 390px;margin-left: 390px;">
                <input class="invisible" type="file" name="image" style="position: absolute;">
                <h6>Upload File</h6>
                </label>
	<td>
  <a class="btn btn-sm btn-primary" href="#" style="
    margin-left: 475px;
">Kirim</a>
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
