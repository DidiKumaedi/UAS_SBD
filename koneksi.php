<?php
$host="localhost";
$user="admin_klinik";
$password="312010002";
$db="klinik_312010002";

$con = mysqli_connect($host,$user,$password,$db);
if (!$con){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>