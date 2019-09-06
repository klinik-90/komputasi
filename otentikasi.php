<?php
include('koneksi.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$hakakses = $_POST['hakakses'];
$q = mysqli_query($koneksi,"select * from tbl_pelanggan where username='$username' and password='$password' and hakakses='$hakakses'");
$data = mysqli_fetch_array($q);
if(mysqli_num_rows($q)==1){
	$_SESSION["username"]=$data["username"];
	$_SESSION["password"]=$data["password"];
	$_SESSION["hakakses"]=$data["hakakses"];	
	
echo "<script>alert('login sukses')</script>";
echo "<script>location.href='index.php?page=home'</script>";
}
else
{
	echo "<script>alert('login gagal !, username atau password salah')</script>";	
	echo "<script>location.href='login.php'</script>";
}	


?>