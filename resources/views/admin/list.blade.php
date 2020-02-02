
<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="/dist/css/dashboard.css" />
    <title>Admin</title>
  
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
  @include('admin.admin-navbar') 
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
   <div class="container-fluid">
   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Hak Akses</th>
    </tr>
  </thead>
  <tbody>
    <?php
	for($i =0;$i<count($users); $i++)
	{
		$no = 1 + $i;
		echo('
		<tr>
      <th scope="row">'.$no.'</th>
      <td>'.$users[$i]->nama.'</td>
      <td>'.$users[$i]->email.'</td>
      <td>'.$users[$i]->hak_akses.'</td>
	  <td> <a class="btn btn-sm btn-primary" href="#">Edit</a> </td>
	  <td> <a class="btn btn-sm btn-primary" href="#" style="
    background-color: red;">Hapus</a> </td>
    </tr>');
	}
	
	?>
	      
  </tbody>
</table>
    </div>
	</main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
	  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

		</body>
</html>
</body>
</html>