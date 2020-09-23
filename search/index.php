<?php
require 'admin/mysql.php';
require('layout/header.php');
?>
<?php 
    $sql = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 1";
    $result = mysqli_query($mysqli, $sql);
    //associative array
    $row1 = mysqli_fetch_assoc($result);
?>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
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
    //associative array
    while($row2 = mysqli_fetch_assoc($result2)){
?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $row2['kategori'];?></strong>
          <h3 class="mb-0"><?php echo $row2['judul_berita'];?></h3>
          <div class="mb-1 text-muted"><?php echo date("d F Y",strtotime($row2['tgl_input'])); ?></div>
          <p class="card-text mb-auto"><?php echo $row2['isi_berita'];?></p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- {% include icons/placeholder.svg width="200" height="250" background="#55595c" color="#eceeef" text="Thumbnail" %} -->
          <img src="icons/<?=$row2['gambar']; ?>" style="width: 200px; height: 250px; background-color: #55595c color: #eceeef;" text='Thumbnail'>
        </div>
      </div>
    </div>
      <?php } ?>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
    	
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
        <p class="blog-post-meta"><?php echo date("d F Y",strtotime($row3['tgl_input'])); ?> by <a href="#"><?php echo $row3['penulis']; ?></a></p>

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