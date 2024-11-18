<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI DATA BARANG</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
	<h2 align="center">FORM PENDAFTARAN BARANG</h2>
	<br/>

	<br/>
	<br/>
	<a type="button"class="btn btn-outline-primary  "href="tambah.php" class="btn" >+ Tambah Barang</a>
	
	<table class="table table-striped">
		<tr>
			<th>NO</th>
			<th>Isbn</th>
			<th>Kategori Buku</th>
			<th>Judul Buku</th>
			<th>Penulis </th>
			<th>Jumlah</th>
			<th>Gambar</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['isbn']; ?></td>
				<td><?php echo $d['kategori']; ?></td>
				<td><?php echo $d['judul_buku']; ?></td>
				<td><?php echo $d['penulis']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
				<td><img src="img/<?php echo $d['gambar']; ?>" height="200" width="200" alt=""></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
         
	</table>
	<a type="button my-lg-0"class="btn btn-outline-primary  my-lg-0"href="index.php" class="btn" >Kembali</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

