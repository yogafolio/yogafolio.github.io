<?php 

require_once "includes/config.php";

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE from berita where id_berita = '$id'");

if ($query) {
	header('location:berita.php');
}

 ?>