<?php

$server='localhost';
$username="root";
$password="";
$database="kusuma";

$koneksi=mysqli_connect($server,$username,$password,$database) or die ("koneksi gagal");
if (mysqli_connect_errno()) {
	echo "GAGAL".mysqli_connect_errno();
}