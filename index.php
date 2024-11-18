<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PENDATAAN BUKU</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">Perpus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button type="button" class="btn btn-light mr-2">Login admin</button>
      <button type="button" class="btn btn-light">Login User</button>
    </form>
  </div>-->
</nav>
    <div class="row"> <!-- div row atas -->
    
    <div class="col-md-2">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="index1.php">Tabel Buku</a></li>
            <li class="list-group-item"><a href="tambah.php">Tambah Buku</a></li>
            <li class="list-group-item">Terlaris</li>
            <li class="list-group-item">Gratis Ongkir</li>
            <li class="list-group-item">Barang Esklusif</li>
        </ul>
    </div>
    <div class="col-md-10">

    <div class="container">

    <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from buku");
		while($d = mysqli_fetch_array($data)){
			?>
    <div class="row">
    
    <div class="card mt-5 mr-5" style="width: 19rem;">
        <div class="card-body">
        <td> <center><img src="img/<?php echo $d['gambar']; ?>" height="200" width="200" alt=""> </center></td>
        <br>
        
        <div class="row">
            <div class="col-md-6">
            <h6>Isbn</h6>    
            </div>
            <div class="col-md-6">
            <td><?php echo $d['isbn']; ?></td>   
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <h6>Kategori Buku</h6>    
            </div>
            <div class="col-md-6">
            <td><?php echo $d['kategori']; ?></td>   
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <h6>Judul Buku</h6>    
            </div>
            <div class="col-md-6">
            <td><?php echo $d['judul_buku']; ?></td>   
            </div>
        </div><div class="row">
            <div class="col-md-6">
            <h6>Penulis</h6>    
            </div>
            <div class="col-md-6">
            <td><?php echo $d['penulis']; ?></td>   
            </div>
        </div><div class="row">
            <div class="col-md-6">
            <h6>Jumlah</h6>    
            </div>
            <div class="col-md-6">
            <td><?php echo $d['jumlah']; ?></td>   
            </div>
        </div>
        <!-- Button trigger modal -->
        <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $d['id']; ?>">
        Lihat lebih lanjut
        </button>-->

        <!-- Modal -->
        <!--<div class="modal fade bd-example-modal-lg" id="myModal<?php echo $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $d['nama']; ?> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col-md-4">
                <td> <center><img src="img/<?php echo $d['foto']; ?>" height="200" width="200" alt=""> </center></td>
                </div>
                <div class="col-md-8">
            <div class="row">
            
            <div class="col-md-6">
            <h6>Nama Barang</h6>    
            </div>
            <div class="col-md-6">
            <?php echo $d['nama']; ?>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <h6>Kode Barang</h6>    
            </div>
            <div class="col-md-6">
            <td><?php echo $d['kode']; ?></td>   
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <h6>Jenis Barang</h6>    
            </div>
            <div class="col-md-6">
            <td><?php echo $d['jenis']; ?></td>   
            </div>
        </div>
             </div>
             </div>
            </div> <--batas modal --
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>-->
        
            <!-- <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
			<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a> -->
        </div>
    </div>
        
            

        <?php 
		}
		?>
			
    <br>

    </div>
    <br>
        
    </div>

    </div>
     <!-- div class row card -->
    </div> <!-- div col-md-10 -->
    </div> <!-- div row atas -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

