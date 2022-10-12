<?php

	include("koneksi.php"); //Koneksi Ke Database
	// Update Pertanyaan
	if (isset($_POST['Simpan']))
	{
	 $NIP=$_POST['NIP'];
	$NamaLengkap=$_POST['NamaLengkap'];
	$TempatLahir=$_POST['TempatLahir'];
	$TanggalLahir=$_POST['TanggalLahir'];
	$Agama=$_POST['Agama'];
	$Jabatan=$_POST['Jabatan'];
	$JenisKelamin=$_POST['JenisKelamin'];
	$AlamatTetap=$_POST['AlamatTetap'];
	$AlamatSekarang=$_POST['AlamatSekarang'];
	$Email=$_POST['Email'];
	$NomorHp=$_POST['NomorHp'];
	$Cuti=$_POST['Cuti'];
	$Keterangan=$_POST['Keterangan'];

  		$update = "UPDATE data_karyawan SET NamaLengkap ='$NamaLengkap',TempatLahir = '$TempatLahir', TanggalLahir = '$TanggalLahir', Agama = '$Agama', Jabatan = '$Jabatan', JenisKelamin = '$JenisKelamin', AlamatTetap = '$AlamatTetap', AlamatSekarang = '$AlamatSekarang',Email = '$Email', NomorHp = '$NomorHp', Cuti = '$Cuti', Keterangan = '$Keterangan'  WHERE NIP='$NIP'";
    	$queryupdate=mysqli_query($koneksi, $update);
    if($queryupdate) {
    	header('location: datakaryawan.php');
	}
}
?>