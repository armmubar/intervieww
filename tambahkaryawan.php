<?php

include ("koneksi.php");



if (isset($_POST['Tambah'])) {
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
	$Keterangan=$_POST['Keterangan'];

	$sama="SELECT * FROM data_karyawan where NIP ='$NIP' ";

	$result = mysqli_query($koneksi,$sama);
	
	$cek_id = mysqli_num_rows($result);


	if ($cek_id>0) {
		$arrayDb = mysqli_fetch_array($result);
		$sudahAda_NIP = $arrayDb["NIP"];
		$sudahAda_NamaLengkap = $arrayDb["NamaLengkap"];
		$sudahAda_TempatLahir = $arrayDb["TempatLahir"];
		$sudahAda_TanggalLahir = $arrayDb["TanggalLahir"];

		echo "<script>
				alert('Data sudah ada!');
				window.location='inputdata.php?NIP=".$sudahAda_NIP."&NamaLengkap=".$sudahAda_NamaLengkap."&TempatLahir=".$sudahAda_TempatLahir."&TanggalLahir=".$sudahAda_TanggalLahir."';
			</script>";
	}else{
			$query="INSERT INTO data_karyawan(NIP, NamaLengkap, TempatLahir, TanggalLahir, Agama, Jabatan, JenisKelamin, AlamatTetap, AlamatSekarang, Email, NomorHp, Keterangan) values ('$NIP','$NamaLengkap','$TempatLahir','$TanggalLahir','$Agama','$Jabatan','$JenisKelamin','$AlamatTetap','$AlamatSekarang','$Email','$NomorHp','$Keterangan')";
			mysqli_query($koneksi,$query);
			echo "<script>alert('Data telah ditambahkan');window.location='lihatdatakaryawan.php'</script>";
	}
}
