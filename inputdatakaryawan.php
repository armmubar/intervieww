<?php

include ("koneksi.php");
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
          <a class="navbar-brand" href="datakaryawan.php">Lihat Data Karyawan</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li>
                <a href="datakaryawan.php">Home</a>
            </li>
            <li class="active">
                <a href="inputdatakaryawan.php">Input Data Karyawan</a>
            </li>
            <li>
                <a href="lihatdatakaryawan.php">Edit Data Karyawan</a>
            </li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
		<form action="tambahkaryawan.php" method="POST">
	    	<div class="form-group row">
	    		<label for="NIP">NIP : </label>
	    		<input type="text" name="NIP" id="NIP " size=15 class="form-control" required <?php if(isset($_GET["NIP"])) echo "value='".$_GET["NIP"]."'" ?> />
	    	</div>

	    	<div class="form-group row">
	      		<label for="NamaLengkap">Nama Lengkap : </label>
	      		<input type="text" name="NamaLengkap" id="NamaLengkap" size=30 class="form-control" required <?php if(isset($_GET["NamaLengkap"])) echo "value='".$_GET["NamaLengkap"]."'" ?>/>
	    	</div>

       <div class="form-group row">
            <label for="TempatLahir">Tempat Lahir : </label>
            <input type="text" name="TempatLahir" id="TempatLahir" size=30 class="form-control" required <?php if(isset($_GET["TempatLahir"])) echo "value='".$_GET["TempatLahir"]."'" ?>/>
        </div>
        <div class="form-group row">
            <label for="TanggalLahir">YYYY/MM/DD : </label>
            <input type="text" name="TanggalLahir" id="TanggalLahir" size=30 class="form-control" required <?php if(isset($_GET["TanggalLahir"])) echo "value='".$_GET["TanggalLahir"]."'" ?>/>
        </div>

        <div class="form-group">
          <label>Agama :</label><br>
          <label class="radio-inline">
          <input type="radio" name="Agama" id="Agama" value="Islam"> Islam</label>
          <label class="radio-inline">
          <input type="radio" name="Agama" id="Agama" value="Kristen"> Kristen</label>
          <label class="radio-inline">
          <input type="radio" name="Agama" id="Agama" value="Budha"> Budha</label>
          <label class="radio-inline">
          <input type="radio" name="Agama" id="Agama" value="Hindu"> Hindu</label>
          <label class="radio-inline">
          <input type="radio" name="Agama" id="Agama" value="KongHuCu"> KongHuCu</label>
        </div>

          <div class="form-group">
          <label>Jabatan :</label><br>
          <label class="radio-inline">
          <input type="radio" name="Jabatan" id="Jabatan" value="Pegawai">  Pegawai</label><br>
          <input type="radio" name="Jabatan" id="Jabatan" value="Dosen">  Dosen</label><br>
       </div>
       <div class="form-group">
          <label>Jenis Kelamin</label>
          <label class="radio-inline">
          <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Pria"> Pria</label>
          <label class="radio-inline">
          <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Wanita"> Wanita</label>
       </div>

        <div class="form-group row">
            <label for="AlamatTetap">Alamat Tetap :</label>
            <input type="text" name="AlamatTetap" id="AlamatTetap" size=50 class="form-control" required <?php if(isset($_GET["AlamatTetap"])) echo "value='".$_GET["AlamatTetap"]."'" ?>/>
        </div>

         <div class="form-group row">
            <label for="AlamatSekarang">Alamat Sekarang :</label>
            <input type="text" name="AlamatSekarang" id="AlamatSekarang" size=50 class="form-control" required <?php if(isset($_GET["AlamatSekarang"])) echo "value='".$_GET["AlamatSekarang"]."'" ?>/>
        </div>
        <div class="form-group row">
            <label for="Email">Email :</label>
            <input type="text" name="Email" id="Email" size=50 class="form-control" required <?php if(isset($_GET["Email"])) echo "value='".$_GET["Email"]."'" ?>/>
        </div>

        <div class="form-group row">
            <label for="NomorHp">Nomor HP :</label>
            <input type="text" name="NomorHp" id="NomorHp" size=50 class="form-control" required <?php if(isset($_GET["NomorHp"])) echo "value='".$_GET["NomorHp"]."'" ?>/>
        </div>
        <div class="form-group">
          <label for="comment">Keterangan:</label>
          <textarea class="form-control" rows="5" name="Keterangan" id="comment"></textarea>
        </div>

        <input type="submit" class="btn btn-success" name="Tambah" id="Tambah" value="Tambah" >
        <input type="reset" name="Reset" id="Reset" class="btn btn-danger" value="Bersihkan" />
        <input type="button" name="Batal" id="Batal" class="btn" value="Batal" onclick="self.history.back()">
	  </form>
	</div>
</body>
</html>