<?php 

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'beritax');
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
//cek koneksi database
if (mysqli_connect_errno())
{
	echo "Gagal terhubung ke Database MySQL" . mysqli_connect_error();	
}
 ?>