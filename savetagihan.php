	<?php
	include "koneksi.php";
	$lokasi_file = $_FILES['gambar']['tmp_name'];
	$tipe_file	 = $_FILES['gambar']['type'];
	$nama_file	 = $_FILES['gambar']['name'];
	$direktori   = "admin/fotobayar/$nama_file";
	$foto = date("Ymdgis")."-".$nama_file;

	if($tipe_file=="image/jpeg")
	{
	move_uploaded_file($lokasi_file, $direktori);
	rename("admin/fotobayar/".$nama_file,"admin/fotobayar/".$foto);	

	mysqli_query($koneksi,"insert into tbl_pembayaran values('$_POST[kodepenjualan]','$_POST[tanggalpembayaran]','$_POST[kodepenjualan]','$_POST[jumlah]','$_POST[total]','$foto','$_POST[status]')");

		echo "<script>alert('data berita berhasil disimpan')</script>";
	}
	else
	{
		echo "<script>alert('tipe file yang anda upload tidak sesuai, upload file dengan tipe jpg')</script>";
	}
	?>
	<script type="text/javascript">location.href='index.php?page=datapembayaran'</script>
	