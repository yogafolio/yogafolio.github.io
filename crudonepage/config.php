<?php 
//pengaturan koneksi database
$conn = new mysqli("localhost","root","","crudonepage");
if (! $conn) {
	die("Error in connection".$conn->connect_error);
}
 ?>