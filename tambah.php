<?php

include ("koneksi.php");



if (isset($_POST['Tambah'])) {
	$nip=$_POST['nip'];
	$namalengkap=$_POST['namalengkap'];
	$tepatwaktu=$_POST['tepatwaktu'];
	$kedisplinan=$_POST['kedisplinan'];
	$kerapihan=$_POST['kerapihan'];
	$keramahan=$_POST['keramahan'];
	$tanggungjawab=$_POST['tanggungjawab'];
	$komunikasi=$_POST['komunikasi'];
	$rasasimpatiempati=$_POST['rasasimpatiempati'];
	$pelayanankepadakonsumen=$_POST['pelayanankepadakonsumen'];
	$pengetahuankemampuanteknis=$_POST['pengetahuankemampuanteknis'];
	$efesiensiefektifkerja=$_POST['efesiensiefektifkerja'];
	$kerjasamadalambekerja=$_POST['kerjasamadalambekerja'];
	$kecepatandalambekerja=$_POST['kecepatandalambekerja'];
	$kreatifitasdalambekerja=$_POST['kreatifitasdalambekerja'];
	$keterangan=$_POST['keterangan'];

	$sama="SELECT * FROM rapot where nip ='$nip' ";

	$result = mysqli_query($koneksi,$sama);
	
	$cek_id = mysqli_num_rows($result);


	if ($cek_id>0) {
		$arrayDb = mysqli_fetch_array($result);
		$sudahAda_nip = $arrayDb["nip"];
		$sudahAda_nama = $arrayDb["namalengkap"];
		echo "<script>
				alert('Data sudah ada!');
				window.location='datakinerja.php?nip=".$sudahAda_id."&namalengkap=".$sudahAda_nama."';
			</script>";
	}else{
			$query="INSERT INTO rapot(nip, namalengkap, tepatwaktu, kedisplinan, kerapihan, keramahan, tanggungjawab, komunikasi, rasasimpatiempati, pelayanankepadakonsumen, pengetahuankemampuanteknis, efesiensiefektifkerja, kerjasamadalambekerja, kecepatandalambekerja, kreatifitasdalambekerja, keterangan) values ('$nip','$namalengkap','$tepatwaktu','$kedisplinan','$kerapihan','$keramahan','$tanggungjawab','$komunikasi','$rasasimpatiempati','$pelayanankepadakonsumen','$pengetahuankemampuanteknis','$efesiensiefektifkerja','$kerjasamadalambekerja','$kecepatandalambekerja','$kreatifitasdalambekerja','$keterangan')";
			mysqli_query($koneksi,$query);
			echo "<script>alert('Data telah ditambahkan');window.location='datakinerja.php'</script>";
	}
}
