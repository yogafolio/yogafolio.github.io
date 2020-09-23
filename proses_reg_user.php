<?php 
//setelah di klik
if (isset($_POST['register_submit'])) {

//koneksi sql
require_once 'includes/config.php';

//tampung valuenya
$nama = mysqli_real_escape_string($conn, trim($_POST['name'])); 
$username = mysqli_real_escape_string($conn, trim($_POST['username']));
$password = mysqli_real_escape_string($conn, trim($_POST['password']));
$konfirmasi = mysqli_real_escape_string($conn, trim($_POST['konfirmasi_password']));
$user_check = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'"));
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
else if (strlen($password) <= 6) {
	// redirect
	header('location: index.php?Minimal sandi 6 karakter');
}
 else {
	//proses inser atau register
	$sql = "INSERT INTO users (name, username, password)
		VALUES ('$nama','$username','$password')";
	mysqli_query($conn, $sql);

	header('location: index.php?register-success');
}

}


 ?>