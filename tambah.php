<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA BUKU</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
	<h2 align="center">FITUR TAMBAH BUKU</h2>
	<form method="post" action="proses-tambah.php" enctype="multipart/form-data">
    <form>
            <div class="form-group">
                <label for="inputAddress">No</label>
                <input type="text" class="form-control" name="no" placeholder="input nama barang">
             </div>
             <div class="form-group">
                <label for="inputAddress">Isbn</label>
                <input type="text" class="form-control" name="isbn" placeholder="input nama barang">
             </div>
             <div class="form-group">
                <label for="inputAddress">Kategori Buku</label>
                <input type="text" class="form-control" name="kategori" placeholder="input nama barang">
             </div>
             <div class="form-group">
                <label for="inputAddress">Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku" placeholder="input nama barang">
             </div><div class="form-group">
                <label for="inputAddress">Penulis</label>
                <input type="text" class="form-control" name="penulis" placeholder="input nama barang">
             </div>
             <div class="form-group">
                <label for="inputAddress">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" placeholder="input nama barang">
             </div>
             <div class="form-group">
				<label>Silahkan Masukkan Gambar :</label>
                <br>
				<input type="file" name="gambar" required="required">

			</div>
             <button type="submit" value="SIMPAN" class="btn btn-outline-primary">Simpan</button>
             <button type="submit" a href="index.php" class="btn btn-outline-primary">Kembali</button>
				<!-- <td><input type="submit" value="SIMPAN"></td> -->
		
		</table>
	</form>
	<br/>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>