<?php 

require 'functions.php';

$id = $_GET['id'];
$p = query("SELECT * FROM penduduk WHERE id = $id");

if(isset($_POST['simpan'])) {
	if(edit($_POST)) {
		echo "<script>
				alert('Data Berhasil Diubah!');
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
		  <input type="hidden" name="id" class="form-control mt-2" value="<?= $p['id']; ?>">
	   </div>
	   <div class="form-group">
		  <label for="nama">Nama :</label>
		  <input type="text" name="nama" id="nama" class="form-control mt-2" required value="<?= $p['nama']; ?>"> 
	   </div>
	   <div class="form-group">
		  <label for="nik">Nik :</label>
		  <input type="text" name="nik" id="nik" class="form-control mt-2" required value="<?= $p['nik']; ?>">
	   </div>http://www.linuxmint.com/start/ulyana/lass="form-control" required><?= $p['alamat']; ?></textarea>
	   </div>
	   <div class="form-group">
		  <label for="gender">Jenis kelamin :</label>
		  <select name="gender" id="gender" class="form-control" required>
		     <option value="<?= $p['igenderd']; ?>"><?= $p['gender']; ?></option>
			 <option value="Laki-laki">Laki-laki</option>
			 <option value="Perempuan">Perempuan</option>
		  </select>
	   </div>
	   <div class="form-group">
		  <label for="status">Status :</label>
		  <select name="status" id="gender" class="form-control">
		     <option value="<?= $p['status']; ?>"><?= $p['status']; ?></option>
			 <option value="belum kawin">Belum Kawin</option>
			 <option value="kawin">Kawin</option>
		  </select>
	   </div>
  
        <button type="submit" class="btn btn-success mt-3" name="simpan">Edit Data</button>
		<button type="reset" class="btn btn-danger mt-3" name="kembali">
		<a href="index.php" style="text-decoration:none;" class="text-white">Kembali</a></button>

	</form>
  </div>
</div>
<!-- AKhir card form -->
	</div>
<script type="text/javascript" src="js/css/bootstrap.min.js"></script>
</body>
</html>

