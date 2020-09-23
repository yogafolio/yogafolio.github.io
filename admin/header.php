 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="../assets/css/bootstrap.css">
 	<link rel="stylesheet" href="../assets/css/dashboard.css">
  <link rel="stylesheet" href="../assets/css/style.css">
 	<title>Administrator Page</title>
 </head>
 <body>
 
 	<!-- <div class="wrapper">
 		<h3>Administrator Page</h3>
 		<div class="alert alert-success" role="alert">
	  <h4 class="alert-heading">Login berhasil!</h4>
	  <p>Yay..Anda telah berhasil login di halaman admin</p>
	  <hr>
	  <p class="mb-0">Apabila ingin keluar bisa klik tombol dibawah ini</p>
 		<p>Jika ingin keluar, silahkan klik <button type="button" class="btn btn-danger"><a href="logout.php">LogOut</a></button></p>
	</div>
 	</div>

 	<header>Administrator</header>

 	<aside>
 		<nav>Home</nav>
 		<nav>List Berita</nav>
 	</aside>

 	<script type="text/javascript" src="../assets/js/jquery.js"></script>
 	<script type="text/javascript" src="../assets/js/popper.js"></script>
 	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
 	

 	<footer>Copyright@2020</footer> -->

 	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="http://localhost/beritax/admin/">Beritax Company</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#create_kategori">
              <span data-feather="plus-circle"></span>
              Buat Kategori
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#edit_kategori">
              <span data-feather="edit"></span>
              Edit Kategori
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#list_kategori">
              <span data-feather="list"></span>
              List Kategori
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#create_berita">
              <span data-feather="plus-square"></span>
              Buat Berita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#edit_berita">
              <span data-feather="edit-3"></span>
              Edit Berita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#list_berita">
              <span data-feather="list"></span>
              List Berita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#create_user">
              <span data-feather="user-plus"></span>
              Buat Akun Pengguna
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#edit_user">
              <span data-feather="user-minus"></span>
              Edit Akun Pengguna
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mng_user">
              <span data-feather="users"></span>
              Manajemen Pengguna
            </a>
          </li>
          
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        </div>