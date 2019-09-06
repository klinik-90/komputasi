<?php
session_start();
include("koneksi.php");
if(!isset($_SESSION['username']) || empty($_SESSION['username']))
{
	echo "<script>location.href='login.php';</script>";
}
?>