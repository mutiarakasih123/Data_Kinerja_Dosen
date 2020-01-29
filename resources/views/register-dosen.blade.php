<!doctype html>

<center><h4>Form Register Dosen</h4></center>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Form Register Dosen</title>
  </head>
	
  <body>
    <form  style="width: 300px;margin: 10px auto;" action="/register-dosen" method="POST"> 
	 	@csrf
	<div class="form-group">
     <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" name ="nama" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	
	<div class="form-group">
     <label for="exampleInputEmail1">Tanggal lahir</label>
    <input type="date" class="form-control" name ="tgl_lahir" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	
  <div class="form-group">
     <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>

   <div class="form-group">
     <label for="exampleInputEmail1">Nip</label>
    <input type="text" class="form-control" name ="nip" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>

   <div class="form-group">
     <label for="exampleInputEmail1">Jabatan</label>
    <input type="text" class="form-control" name ="jabatan" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>

   <div class="form-group">
     <label for="exampleInputEmail1">prodi</label>
    <input type="text" class="form-control" name ="prodi" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>
   
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name ="password" id="exampleInputPassword1">
  </div>
  
  <div class="form-group">
     <label for="exampleInputEmail1">Ulangi Password</label>
    <input type="password" class="form-control" name ="ulangi_password" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
  <?php 
        if(isset($message)){
            echo "<div class='alert alert-danger p-1 m-2'>", $message ,"</div>";   
        }?>
        	
  <a href="/" class="btn btn-primary" margin: 0 auto;
    display: block; > Kirim  </a>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>