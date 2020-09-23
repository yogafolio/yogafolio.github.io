<?php 
require ('includes/config.php');
$qry = mysqli_query($conn,"UPDATE users SET status = '".$_POST['val']."' WHERE id = '".$_POST['user_id']."'");
if ($qry) {
	$q = mysqli_query($conn,"SELECT * FROM users WHERE id = '".$_POST['user_id']."'");
	$data = mysqli_fetch_assoc($q);
	echo $data['status'];
}
 ?>