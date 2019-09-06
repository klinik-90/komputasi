<?php include "cek-login.php";?>
<?php
	include "koneksi.php";
	if(!empty($_POST["btnfoto"]))
	{
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file   = $_FILES['foto']['type'];
		$nama_file   = $_FILES['foto']['name'];
		$direktori   = "fotoprofile/$nama_file";
		$filenya = date("YmdGis")."-".$nama_file;
		
		move_uploaded_file($lokasi_file, $direktori);
		rename("fotoprofile/".$nama_file,"fotoprofile/".$filenya);
		mysqli_query($koneksi,"update admin set fotoadmin='$filenya' where nik='".$_SESSION["nik"]."'");
		echo "<script>alert('foto berhasil diubah')</script>";
	}
	else if(!empty($_POST["btnpassword"]))
	{
		if(empty($_POST["konfirmasi_password"]))
		{
			echo "<script>alert('password tidak boleh kosong');</script>";
		}
		else if($_SESSION["password"]!=$_POST["password_lama"])
		{
			echo "<script>alert('password lama tidak sama');</script>";
		}
		else if($_POST["password_baru"]!=$_POST["konfirmasi_password"])
		{
			echo "<script>alert('password baru tidak sama');</script>";
		}
		else
		{
			mysqli_query($koneksi,"update admin set password='$_POST[konfirmasi_password]' where username='$_SESSION[username]' and password='$_POST[password_lama]' ");
			$_SESSION["password"]=$_POST["konfirmasi_password"];
			echo "<script>alert('password berhasil diubah');</script>";
		}
	}
	else if(!empty($_POST["btnprofile"]))
	{
		mysqli_query($koneksi,"update admin set namaadmin='$_POST[namaadmin]',alamatadmin='$_POST[alamatadmin]',jkadmin='$_POST[jkadmin]',teleponadmin='$_POST[teleponadmin]',agamaadmin='$_POST[agamaadmin]' where username='$_SESSION[username]'");
		echo "<script>alert('profile berhasil diubah')</script>";
	}
	$quser = mysqli_query($koneksi,"select * from admin where nik='$_SESSION[nik]'");
	$duser = mysqli_fetch_array($quser);
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php";?>
<body class="padTop53 " >
    <div id="wrap">
        <div id="top">
        <?php include "navbar.php";?>
        </div>
        <?php include "leftpanel.php";?>
        <?php
			if(empty($_GET["page"]))
			{
				include "home.php";
			}
			else
			{
				include $_GET["page"].".php";
			}
		?>
    </div>
    <?php include "footer.php";?>
	<?php include "jsbawah.php";?>
</body>
</html>