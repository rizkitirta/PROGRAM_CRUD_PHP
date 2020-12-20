<?php 
require 'functions.php';

$penduduk = query("SELECT * FROM penduduk ORDER BY id DESC");



if(isset($_POST['hapus'])) {
	if(hapus($_POST) > 0) {
		echo "<script>
                alert('Data Berhasil Dihapus!');
		      </script>";
	}else {
		echo "<script>
                alert('Data Gagal Dihapus!');
		      </script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PROGRAM CRUD BOOTSTRAP 4</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>

<h2 class="mt-5 font-weight-bold" style="text-align:center;">CRUD PHP MYSQLI + BOOTSTRAP</h2>
<h2 class="text-center">By @rizkitirta</h2>

<div class="container">	
     <!--SEARCH-->
     <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus
           placeholder="Ketik Pencarian disini.." autocomplete="off" class="keyword" style="float:right; margin-top:50px;">
     </form>

   <button type="submit" class="btn btn-primary mt-5" name="submit">
		<a href="simpan.php" style="text-decoration:none;" class="text-white">Tambah Data</a>
   </button>

<!-- awal card tabel -->
<div class="card mt-3">
  <div class="card-header bg-success text-white">
    Daftar Penduduk RT 01/LK 04 :
  </div>

  <div class="container-1">
  <div class="card-body">
    <table class="table table-border ">
	  <tr class="bg-warning">
	    <th>No.</th>
		<th>Nama</th>
		<th>Nik</th>
		<th>Alamat</th>
		<th>Jenis Kelamin</th>
		<th>Status</th>
		<th>Aksi</th>
	  </tr>
	  <tr>
	  <?php  $i = 1;
	  foreach($penduduk as $p): ?>
	    <td><?= $i; ?></td>
		<td><?= $p['nama']; ?></td>
		<td><?= $p['nik']; ?></td>
		<td><?= $p['alamat']; ?></td>
		<td><?= $p['gender']; ?></td>
		<td><?= $p['status']; ?></td>
		<td>
		
		<button type="submit" class="btn btn-primary mt-3" name="edit">
		    <a href="edit.php?id=<?= $p['id']; ?>" style="text-decoration:none;" class="text-white">Edit</a>
		</button>
		 
		<button type="submit" class="btn btn-danger mt-3" name="hapus">
		    <a href="hapus.php?id=<?= $p['id']; ?>" style="text-decoration:none;" 
			class="text-white"  onclick="return confirm('Apakah Anda Yakin?');">Hapus</a>
		</button>
		</td>
	  </tr>
	  <?php $i++; ?>
	  <?php endforeach; ?>
	</table>
  </div>
</div>
</div>
<!-- akhir card tabel -->
</div>
<i class="fas fa-trash-alt"></i>
<script src="js/script.js"></script>
<script type="text/javascript" src="js/css/bootstrap.min.js"></script>
</body>
</html>