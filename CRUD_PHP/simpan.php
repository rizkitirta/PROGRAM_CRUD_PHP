<?php 

require 'functions.php';

if(isset($_POST['simpan'])) {
	if(simpan($_POST) > 0) {
		echo "<script>
				alert('Data Berhasil Ditambahkan!');
				document.location.href='index.php';
		      </script>";
	}else {
		echo "<script>
				alert('Data Gagal Ditambahkan!');
				document.location.href='index.php';
		      </script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	  <!-- Awal Card Form -->
<div class="card mt-3">
  <div class="card-header bg-primary text-white">
    Form Input Data :
  </div>
  <div class="card-body">
    <form action="" method="POST">
	   <div class="form-group">
		  <label for="nama">Nama :</label>
		  <input type="text" name="nama" id="nama" class="form-control mt-2" required>
	   </div>
	   <div class="form-group">
		  <label for="nik">Nik :</label>
		  <input type="text" name="nik" id="nik" class="form-control mt-2" required>
	   </div>
	   <div class="form-group">
		  <label for="alamat">Alamat :</label>
		  <textarea name="alamat" id="alamat" class="form-control" required></textarea>
	   </div>
	   <div class="form-group">
		  <label for="gender">Jenis kelamin :</label>
		  <select name="gender" id="gender" class="form-control" required>
		     <option value="Pilih jenis kelamin">Pilih Jenis Kelamin</option>
			 <option value="Laki-laki">Laki-laki</option>
			 <option value="Perempuan">Perempuan</option>
		  </select>
	   </div>
	   <div class="form-group">
		  <label for="status">Status :</label>
		  <select name="status" id="gender" class="form-control">
		     <option value="Pilih jenis kelamin">Pilih Status</option>
			 <option value="belum kawin">Belum Kawin</option>
			 <option value="kawin">Kawin</option>
		  </select>
	   </div>
  
        <button type="submit" class="btn btn-success mt-3" name="simpan">Simpan Data</button>
		<button type="reset" class="btn btn-danger mt-3" name="reset">
		<a href="index.php" style="text-decoration:none;" class="text-white">Kembali</a></button>

	</form>
  </div>
</div>
<!-- AKhir card form -->
	</div>
<script type="text/javascript" src="js/css/bootstrap.min.js"></script>
</body>
</html>

