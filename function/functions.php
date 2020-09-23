<?php function head() { ?>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-4.5.2/dist/css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900">
    <link rel="stylesheet" href="assets/css/blog.css">
    <!-- CSS COSTUM SENDIRI-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Web Berita Terupdate & Terpercaya | Beritax Company</title>
<?php } ?>

<?php function get_header() { ?>

<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="">BERITAX</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari_artikel" id="cari_artikel">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <button class="btn btn-sm btn-outline-secondary" id="register_show">Sign up</button>
      </div>
    </div>
  </header>

<?php } ?>

<?php function get_menu() { ?>
	<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
    <?php
    require '../conn.php';
    $sql12 = "SELECT nama_kategori FROM kategori ORDER BY nama_kategori ASC LIMIT 12";
    $result12 = mysqli_query($mysqli, $sql12);
    //associative array
    while($row12 = mysqli_fetch_assoc($result12)){
    ?>
      <a class="p-2 text-muted" href="#"><?=$row12['nama_kategori']?></a>
    <?php } ?>
      </nav>
  </div>
<?php } ?>

<?php function get_home() { ?>
	<?php
require '../function/function.php';
require('layout/header.php');
// require 'signup.php';
?>
<?php
    signup(); 
    $sql = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1";
    $result = mysqli_query($mysqli, $sql);
    //associative array
    $row1 = mysqli_fetch_assoc($result);
?>
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark text-break" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"><?php echo $row1['judul_berita'];?></h1>
      <p class="lead my-3"><?php echo $row1['isi_berita'];?></p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <?php
    $sql2 = "SELECT * FROM berita ORDER BY id_berita ASC LIMIT 2";
    $result2 = mysqli_query($mysqli, $sql2);
    $num_char = 35;
    //associative array
    while($row2 = mysqli_fetch_assoc($result2)){
?>

    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $row2['kategori'];?></strong>
          <h3 class="mb-0"><?php echo $row2['judul_berita'];?></h3>
          <div class="mb-1 text-muted"><?php get_date($row2['tgl_input']); ?></div>
          <p class="card-text mb-auto"><?php echo substr($row2['isi_berita'], 0, $num_char) . '...'?></p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- {% include icons/placeholder.svg width="200" height="250" background="#55595c" color="#eceeef" text="Thumbnail" %} -->
          <img src="img/<?=$row2['gambar']; ?>" style="width: 200px; height: 250px; background-color: #55595c color: #eceeef;" text='Thumbnail'>
        </div>
      </div>
    </div>
      <?php } ?>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main text-break">
    	
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        ARTIKEL TERUPDATE
      </h3>

<?php
    $sql3 = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5";
    $result3 = mysqli_query($mysqli, $sql3);
    //associative array
    while($row3 = mysqli_fetch_assoc($result3)){
?>
      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row3['judul_berita']; ?></h2>
        <p class="blog-post-meta"><?php get_date($row3['tgl_input']); ?> by <a href="#"><?php echo $row3['penulis']; ?></a></p>

        <img src="img/<?= $row3['gambar']; ?>" class="rounded mx-auto d-block" alt="<?= $row3['gambar']; ?>" title="<?= $row3['gambar']; ?>" style="width:259; height:194px">

        <p><?php echo $row3['isi_berita'];?></p>
      </div><!-- /.blog-post -->
<?php } ?>
      
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <?php require('layout/footer.php'); ?>
<?php } ?>

<?php function get_about() { ?>
	
<?php } ?>

<?php function get_contact() { ?>
	
<?php } ?>

<?php function get_footer() { ?>
	<aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Portal Berita <em>Lokal dan Luar Negeri</em> Berdasarkan sumber yang benar-benar valid dan terpercaya bukan Hoax. Beritax Company telah berdiri sejak tahun 2000</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <?php
    $sql12b = "SELECT DISTINCT DATE_FORMAT(tgl_input, '%M %Y') AS tgl FROM berita ORDER BY tgl_input DESC LIMIT 12";
    $result12b = mysqli_query($mysqli, $sql12b);
    //associative array
    while($row12b = mysqli_fetch_assoc($result12b)){
    ?>
          <li><a href="#"><?=$row12b['tgl'];?></a></li>
        <?php } ?>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="https://github.com/yogafolio">GitHub</a></li>
          <!-- <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li> -->
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!--     <script type="text/javascript" src="./assets/js/jquery.js"></script>
 	<script type="text/javascript" src="./assets/js/popper.js"></script>
 	<script type="text/javascript" src="./assets/js/bootstrap.js"></script> -->
  </body>
  <script type="text/javascript">
      $(document).ready(function(){
        $("#register_hide").click(function(){
          $('#signup').hide(1000);
        })
        $("#register_show").click(function(){
          $("#signup").show(1000);
        })
      });
    </script>
</html>
<?php } ?>

<?php function get_date($tgl){ ?>
	<?php echo date("d F Y",strtotime($tgl)); ?>
<?php } ?>

<?php function signup() { ?>
	<div id="signup" class="col-md-4 position-relative font-weight-bold">
  <h2 id="create_user">Create New User</h2>

<form action="proses_reg_user.php" method="POST">
  <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Anda">
  </div>
  <div class="form-group">
    <label for="username">Username / Email address</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
   <div class="form-group">
    <label for="konfirmasi_password">Konfirmasi Password</label>
    <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password">
  </div>
  <button type="submit" name="register_submit" class="btn btn-primary" id="register_show">Buat Akun</button>
  
</form>
<button name="register_hide" class="btn btn-secondary mt-1" id="register_hide">Cancel</button>
</div>
<?php } ?>

<?php function reg_user() { ?>
<?php 
//setelah di klik
if (isset($_POST['register_submit'])) {

//koneksi sql
require_once '../conn.php';

//tampung valuenya
$nama = mysqli_real_escape_string($mysqli, trim($_POST['name'])); 
$username = mysqli_real_escape_string($mysqli, trim($_POST['username']));
$password = mysqli_real_escape_string($mysqli, trim($_POST['password']));
$konfirmasi = mysqli_real_escape_string($mysqli, trim($_POST['konfirmasi_password']));
$user_check = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM users WHERE username = '$username'"));
// cek apakah username telah digunakan atau belum
if ($user_check > 0) {
	// jika ada username yang sama
	header('location: index.php?username-failed');
} 
// cek apakah konfirmasi password benar ?
else if ($password != $konfirmasi) {
	// redirect
	header('location: index.php?konfirmasipassword-failed');
}
else if ($password < 6) {
	// redirect
	header('location: index.php?Minimal sandi 6 karakter');
}
 else {
	//proses inser atau register
	$sql = "INSERT INTO users (name, username, password)
		VALUES ('$nama','$username','$password')";
	mysqli_query($mysqli, $sql);

	header('location: index.php?register-success');
}

}

?>

<?php } ?>