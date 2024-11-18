<!DOCTYPE html>
<html>
<head>
<title>EDIT DATA BUKU</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
	
	<br/>
	<br/>
	<h3>EDIT DATA BUKU</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from buku where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
	<form method="post" action="proses-edit.php" enctype="multipart/form-data">
        <input type="hidden"class="form-control"name="id" value="<?php echo $d['id']; ?>">s
        
        <div class="form-group">
                <label for="inputAddress">Isbn</label>
                
                <input type="text" class="form-control" name="isbn" value="<?php echo $d['isbn']; ?>">
        </div>
        <div class="form-group">
                <label for="inputAddress">Kategori Buku</label>
                <input type="text" class="form-control" name="kategori" value="<?php echo $d['kategori']; ?>">
        </div>
        <div class="form-group">
                <label for="inputAddress">Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku" value="<?php echo $d['judul_buku']; ?>">
        </div>
        <div class="form-group">
                <label for="inputAddress">Penulis</label>
                <input type="text" class="form-control" name="penulis" value="<?php echo $d['penulis']; ?>">
        </div>
        <div class="form-group">
                <label for="inputAddress">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" value="<?php echo $d['jumlah']; ?>">
        </div>
        <div class="form-group">
				<label>Gambar :</label>
				<input type="file" name="gambar" required="required">
			</div>
            <button type="submit" value="SIMPAN" class="btn btn-outline-primary">Simpan</button>
            <a type="button "class="btn btn-outline-primary  my-lg-0"href="index1.php" class="btn" >Kembali</a>
		</form>
		<?php 
	}
	?>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>