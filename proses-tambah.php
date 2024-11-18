<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$isbn = $_POST['isbn'];
$kategori = $_POST['kategori'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$jumlah = $_POST['jumlah'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','webp');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if($filename == ""){
    mysqli_query($koneksi,"INSERT INTO buku VALUES('','$isbn','$kategori','$judul_buku','$penulis','$jumlah','') ");
}else{
	if(!in_array($ext,$ekstensi) ) {
		header("location:index1.php?pesan=gagal_ekstensi");
	}else{
		if($ukuran < 91044070){		
			$xx = $rand.'_'.$filename;
			move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$rand.'_'.$filename);
			$foto = mysqli_query($koneksi,"INSERT INTO buku VALUES('','$isbn','$kategori','$judul_buku','$penulis','$jumlah','$xx') ");
		}else{
			header("location:index1.php?pesan=gagal_ukuran");
		}
	}
	header("location:index.php");
}
 
?>