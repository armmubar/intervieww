<?php

include("koneksi.php");
$NIP=$_GET['id'];
$output="SELECT * FROM data_karyawan WHERE NIP='$NIP'";
$query=mysqli_query($koneksi,$output) or die (mysqli_error());

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Karyawan </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

  <script src="js/jquery.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
</head>
<body background="bg.jpg" style="background-size: 100%">
<//body background="LOGO UNIVERSITAS NASIONAL.png" style="background-size: 35%">
  <!-- ini navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="datakaryawan.php">Data Karyawan</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li>
                <a href="datakaryawan.php">Home</a>
            </li>
            <li>
                <a href="inputdatakaryawan.php">Input Data Karyawan</a>
            </li>
            <li>
                <a href="lihatdatakaryawan.php">Lihat Data Karyawan</a>
            </li>
            <li class="active">
              <a href="">Input Data Cuti</a>
            </li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container">
    	<?php 

    while ($r=mysqli_fetch_array($query)) {
   ?>
		<form action="update.php" method="POST">
	    	<div class="form-group row">
	    		<label for="NIP">NIP : </label>
	    		<input type=text class="form-control" name="NIP" id="NIP" size="15" value="<?php echo $r['NIP']; ?>" readonly="readonly">
	    	</div>

	    	<div class="form-group row">
	      		<label for="NamaLengkap">Nama Lengkap : </label>
	      		<input type="text" class="form-control" name="NamaLengkap" id="NamaLengkap" size="25" value="<?php echo $r['NamaLengkap']; ?> "readonly="readonly"/>
	    	</div>

        <div class="form-group row">
            <label for="TempatLahir">Tempat Lahir: </label>
            <input type="text" name="TempatLahir" id="TempatLahir" class="form-control" size="25" value="<?php echo $r['TempatLahir']; ?>"readonly="readonly"/>
        </div>

        <div class="form-group row">
            <label for="TanggalLahir">Tanggal Lahir: </label>
            <input type="text" name="TanggalLahir" id="TanggalLahir" class="form-control" size="25" value="<?php echo $r['TanggalLahir']; ?>"readonly="readonly"/>
        </div>

        <div class="form-group row">
            <label for="Agama">Pilih Agama : </label>
      <input type="text" name="Agama" id="Agama" class="form-control" size="25" value="<?php echo $r['Agama']; ?>" readonly="readonly"/></br>
            <select name="Agama" >
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Budha">Budha</option>
              <option value="Hindu">Hindu</option>
              <option value="KongHuCu">KongHuCu</option>
            </select>
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="text" name="JenisKelamin" id="JenisKelamin" class="form-control" size="25" value="<?php echo $r['JenisKelamin']; ?>" readonly="readonly"/>
          <label class="radio-inline">
          <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Pria" > Pria</label>
          <label class="radio-inline">
          <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Wanita"> Wanita</label>
        </div>

        <div class="form-group">
          <label>Jabatan</label>
          <input type="text" name="Jabatan" id="Jabatan" class="form-control" size="25" value="<?php echo $r['Jabatan']; ?>" readonly="readonly"/>
          <label class="radio-inline">
          <input type="radio" name="Jabatan" id="Jabatan" value="Dosen" > Dosen</label>
          <label class="radio-inline">
          <input type="radio" name="Jabatan" id="Jabatan" value="Pegawai"> Pegawai</label>
        </div>  

	    	<div class="form-group row">
	      		<label for="AlamatTetap">Alamat Tetap: </label>
	      		<input type="text" name="AlamatTetap" id="AlamatTetap" class="form-control" size="25" value="<?php echo $r['AlamatTetap']; ?>"readonly="readonly"/>
	    	</div>

        <div class="form-group row">
            <label for="AlamatSekarang">Alamat Sekarang : </label>
            <input type="text" name="AlamatSekarang" id="AlamatSekarang" class="form-control" size="25" value="<?php echo $r['AlamatSekarang']; ?>"/>
        </div>

        <div class="form-group row">
            <label for="Email">Email : </label>
            <input type="text" name="Email" id="Email" class="form-control" size="25" value="<?php echo $r['Email']; ?>"/>
        </div>

        <div class="form-group row">
            <label for="NomorHp">Nomor HP : </label>
            <input type="text" name="NomorHp" id="NomorHp" class="form-control" size="25" value="<?php echo $r['NomorHp']; ?>"/>
        </div>

        <div class="form-group row">
            <label for="Cuti">Jumlah Cuti : </label>
            <select name="Cuti" >
              <option value="1">1 Hari</option>
              <option value="2">2 Hari</option>
              <option value="3">3 Hari</option>
              <option value="4">4 Hari</option>
              <option value="5">5 Hari</option>
              <option value="6">6 Hari</option>
              <option value="7">7 Hari</option>
              <option value="8">8 Hari</option>
            </select>
          </div>
	    	
        <div class="form-group">
          <label for="comment">Keterangan:</label>
          <textarea class="form-control" rows="5" name="Keterangan" id="comment"><?php echo $r['Keterangan']?></textarea>
        </div>

        <?php
          };
         ?>
	    	<input type="submit" class="btn btn-success" value="submit" name="Simpan">
        <a href="lihatdata.php" class="btn btn-default">Batal</a>
	  </form>
	</div>
</body>
</html>