<?php 

require_once "includes/config.php";

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE from kategori where id_kategori = '$id'");

if ($query) {
	header('location:kategori.php');
}

 ?>