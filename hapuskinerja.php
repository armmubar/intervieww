<?php
include ("koneksi.php");
$nip = $_GET['id'];
$delete="DELETE FROM rapot WHERE nip='$nip'";
$queryupdate=mysqli_query($koneksi, $delete);
    if($queryupdate) {
	header ("Location:datakinerja.php");
}
?>