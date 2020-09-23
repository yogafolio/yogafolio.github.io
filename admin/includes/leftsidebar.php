<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="berita.php">
              <span data-feather="list"></span>
              Berita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kategori.php">
              <span data-feather="list"></span>
              Kategori
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span data-feather="users"></span>
              Pengguna
            </a>
          </li>          
        </ul>
      </div>
    </nav>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<?php 
// var_dump($_SESSION);
$log_as = $_SESSION['username'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$log_as'");
$result = mysqli_fetch_assoc($query);
// echo "<p class='text-left d-inline'>Selamat datang, ".$result['name'].'</p>';
 ?>

  <?php 
echo "<p class='text-right'>Login sebagai : ".$log_as."</p>";
  echo today();
  ?>
