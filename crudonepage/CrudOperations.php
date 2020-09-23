<?php 
//Kumpulan Fungsi untuk melakukan suatu aksi atau perintah
class CrudOperations
{
	public function saveData($conn,$nama,$email,$contact,$editId)
	{
		if($editId == ""){
			$query = "INSERT INTO crud_application SET name='$name', email='$email', contact= '$contact'";
		}else{
			$query = "UPDATE crud_application SET name='$name', email='$email', contact= '$contact' WHERE id='$editId'";
		}
		$result = $conn->query($query) or die ("Gagal dalam menyimpan data".$conn->error);
		return $result;
	}

	public function getAllData($conn)
	{
		$query = "SELECT * FROM crud_application";
		$result = $conn->query($query) or die ("Gagal dalam mendapatkan data".$conn->error);
		return $result;
	}

	public function deleteData($conn,$deleteId)
	{
		$query = "DELETE FROM crud_application WHERE id='$deleteId'";
		$result = $conn->query($query) or die("Error dalam menghapus data".$conn->error);
		return $result;
	}
}