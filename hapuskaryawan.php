<?php
include ("koneksi.php");
$NIP = $_GET['id'];
$delete="DELETE FROM data_karyawan WHERE NIP='$NIP'";
$queryupdate=mysqli_query($koneksi, $delete);
    if($queryupdate) {
	header ("Location:lihatdatakaryawan.php");
}
?>