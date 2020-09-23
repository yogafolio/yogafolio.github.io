<?php 
//setelah di klik
if (isset($_POST['tambah_berita_submit'])) {

//koneksi sql
require_once 'includes/config.php';
// $id = $_GET['id'];

//tampung valuenya /menampung data pada variable
$kategori = mysqli_real_escape_string($mysqli, trim($_POST['nama_kategori'])); 
$judul = mysqli_real_escape_string($mysqli, trim($_POST['judul_berita']));
$isi = mysqli_real_escape_string($mysqli, trim($_POST['isi_berita']));
$gambar = $_FILES['gambar']['name'];
//cek kategori ada atau tidak
$kategori_check = mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM kategori WHERE nama_kategori = '$kategori'"));

//pindahkan file gambar
if(!empty($gambar)){
	move_uploaded_file($_FILES['gambar']['tmp_name'],"../img/".$gambar);
}
// jika judul kurang dari 5 karakter
if (strlen($judul) < 5) {
	header('location: index.php?judul-harus-diisi');
} else if (strlen($isi) <= 30) {
	// jika ada username yang sama
	header('location: index.php?isi-minimal-50-karakter');
} else {
	//proses inser atau register
	$sql = "INSERT INTO berita (judul_berita, kategori, isi_berita, tgl_input, gambar)
		VALUES ('$judul','$kategori','$isi',now(),'$gambar')";
	mysqli_query($mysqli, $sql);

	header('location: berita.php?pesan=tambah-berita-success#create_berita');
}
}

 ?>