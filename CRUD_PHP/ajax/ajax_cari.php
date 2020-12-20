<?php 
require '../functions.php';
$penduduk = cari($_GET['keyword']);

?>

<div class="container-1">
  <div class="card-body">
    <table class="table table-border ">
	  <tr class="bg-warning text-center">
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