<?php 
//setelah di klik
if (isset($_POST['edit_user_submit'])) {

//koneksi sql
require_once 'includes/config.php';
// $id = $_GET['id'];

//tampung valuenya
$id = mysqli_real_escape_string($mysqli, trim($_POST['id'])); 
$nama = mysqli_real_escape_string($mysqli, trim($_POST['name'])); 
$username = mysqli_real_escape_string($mysqli, trim($_POST['username']));
$password = mysqli_real_escape_string($mysqli, trim(md5($_POST['password'])));
$check_id =  mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM users WHERE id = '$id'"));
// cek apakah id ditemukan atau tidak
if ($check_id > 0) {
	//proses inser atau register
	$sql = "UPDATE `users` SET `name` = '$nama', `username` = '$username', `password` = '$password' WHERE `users`.`id` = '$id'";
	mysqli_query($mysqli, $sql);
	header('location: users.php?pesan=edit-user-success#edit_user');
	
} else {
	// jika user id tidak ada
	header('location: users.php?pesan=user_id-not-found');
}

}


 ?>