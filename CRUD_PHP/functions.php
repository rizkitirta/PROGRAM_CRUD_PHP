<?php 

function koneksi() {
    return mysqli_connect('localhost', 'root', '', 'crud2020');
}

function query($query) {
	$conn = koneksi();
	$result = mysqli_query($conn, $query);
	
	if( mysqli_num_rows($result) == 1) {
		return mysqli_fetch_assoc($result);
	}
	
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function simpan($data) {
	$conn = koneksi();

	$nama = htmlspecialchars($data['nama']);
	$nik = htmlspecialchars($data['nik']);
	$alamat = htmlspecialchars($data['alamat']);
	$gender = htmlspecialchars($data['gender']);
	$status = htmlspecialchars($data['status']);

	$query ="INSERT INTO penduduk
			   VALUES
			(null,'$nama','$nik','$alamat', '$gender', '$status')";
			   
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

function hapus($id) {
	$conn = koneksi();
	$query = "DELETE FROM penduduk WHERE id = '$id' ";

	mysqli_query($conn, $query) or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);

}

function edit($data) {
	$conn= koneksi();

	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$nik = htmlspecialchars($data['nik']);
	$alamat = htmlspecialchars($data['alamat']);
	$gender = htmlspecialchars($data['gender']);
	$status = htmlspecialchars($data['status']);

	$query = "UPDATE penduduk SET
	nama = '$nama',
	nik = '$nik',
	alamat = '$alamat',
	gender = '$gender',
	status = '$status'
	WHERE id = $id";

	mysqli_query($conn,$query) or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	
	$conn = koneksi();
	$query = "SELECT * FROM penduduk WHERE nama LIKE '%$keyword%' ";

	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
  return $rows;
}

?>