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
          <a class="navbar-brand" href="datakaryawan.php">Data Karyawan</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li>
                <a href="datakinerja.php">Penilaian Karyawan</a>
            </li>
            <li class="active">
                <a href="inputdata.php">Input Data Penilaian Karyawan</a>
            </li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
		<form action="tambah.php" method="POST">
	    	<div class="form-group row">
	    		<label for="nip">NIP : </label>
	    		<input type="text" name="nip" id="nip" size=15 class="form-control" required <?php if(isset($_GET["nip"])) echo "value='".$_GET["nip"]."'" ?> />
	    	</div>
	    	<div class="form-group row">
	      		<label for="namalengkap">Nama Lengkap : </label>
	      		<input type="text" name="namalengkap" id="namalengkap" size=30 class="form-control" required <?php if(isset($_GET["namalengkap"])) echo "value='".$_GET["namalengkap"]."'" ?>/>
	    	</div>
	    	<div class="form-group">
          <label>Tepat Waktu</label></br>
          <label class="radio-inline">
          <input type="radio" name="tepatwaktu" id="tepatwaktu" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="tepatwaktu" id="tepatwaktu" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="tepatwaktu" id="tepatwaktu" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Kedisplinan</label></br>
          <label class="radio-inline">
          <input type="radio" name="kedisplinan" id="kedisplinan" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="kedisplinan" id="kedisplinan" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="kedisplinan" id="kedisplinan" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>kerapihan</label></br>
          <label class="radio-inline">
          <input type="radio" name="kerapihan" id="kerapihan" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="kerapihan" id="kerapihan" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="kerapihan" id="kerapihan" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>keramahan</label></br>
          <label class="radio-inline">
          <input type="radio" name="keramahan" id="keramahan" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="keramahan" id="keramahan" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="keramahan" id="keramahan" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Tanggung Jawab</label></br>
          <label class="radio-inline">
          <input type="radio" name="tanggungjawab" id="tanggungjawab" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="tanggungjawab" id="tanggungjawab" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="tanggungjawab" id="tanggungjawab" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Komunikasi</label></br>
          <label class="radio-inline">
          <input type="radio" name="komunikasi" id="komunikasi" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="komunikasi" id="komunikasi" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="komunikasi" id="komunikasi" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Rasa Simpati Empati</label></br>
          <label class="radio-inline">
          <input type="radio" name="rasasimpatiempati" id="rasasimpatiempati" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="rasasimpatiempati" id="rasasimpatiempati" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="rasasimpatiempati" id="rasasimpatiempati" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Pelayanan Kepada Konsumen</label></br>
          <label class="radio-inline">
          <input type="radio" name="pelayanankepadakonsumen" id="pelayanankepadakonsumen" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="pelayanankepadakonsumen" id="pelayanankepadakonsumen" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="pelayanankepadakonsumen" id="pelayanankepadakonsumen" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Pengetahuan Kemampuan Teknis</label></br>
          <label class="radio-inline">
          <input type="radio" name="pengetahuankemampuanteknis" id="pengetahuankemampuanteknis" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="pengetahuankemampuanteknis" id="pengetahuankemampuanteknis" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="pengetahuankemampuanteknis" id="pengetahuankemampuanteknis" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Efesiensi Efektif Kerja</label></br>
          <label class="radio-inline">
          <input type="radio" name="efesiensiefektifkerja" id="efesiensiefektifkerja" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="efesiensiefektifkerja" id="efesiensiefektifkerja" value="cukup">75 - 50</label></br>
          <input type="radio" name="efesiensiefektifkerja" id="efesiensiefektifkerja" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Kerjasama Dalam Bekerja</label></br>
          <label class="radio-inline">
          <input type="radio" name="kerjasamadalambekerja" id="kerjasamadalambekerja" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="kerjasamadalambekerja" id="kerjasamadalambekerja" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="kerjasamadalambekerja" id="kerjasamadalambekerja" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Kecepatan Dalam Bekerja</label></br>
          <label class="radio-inline">
          <input type="radio" name="kecepatandalambekerja" id="kecepatandalambekerja" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="kecepatandalambekerja" id="kecepatandalambekerja" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="kecepatandalambekerja" id="kecepatandalambekerja" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label>Kreatifitas Dalam Bekerja</label></br>
          <label class="radio-inline">
          <input type="radio" name="kreatifitasdalambekerja" id="kreatifitasdalambekerja" value="baik">100 - 75</label></br>
          <label class="radio-inline">
          <input type="radio" name="kreatifitasdalambekerja" id="kreatifitasdalambekerja" value="cukup">75 - 50</label></br>
          <label class="radio-inline">
          <input type="radio" name="kreatifitasdalambekerja" id="kreatifitasdalambekerja" value="buruk">50 - 0</label>
       </div>
        <div class="form-group">
          <label for="comment">Keterangan:</label>
          <textarea class="form-control" rows="5" name="keterangan" id="comment"></textarea>
        </div> 	    	
        <input type="submit" class="btn btn-success" name="Tambah" id="Tambah" value="Tambah" >
        <input type="reset" name="Reset" id="Reset" class="btn btn-danger" value="Bersihkan" />
        <input type="button" name="Batal" id="Batal" class="btn" value="Batal" onclick="self.history.back()">
	  </form>


public class program{
	public static void main(String [] args){
	char [] ch = {'S','N','L'};
	for (int i=0; i<3; i++){
	char temp1=ch[1];
	ch[1] = ch [2];
	ch[2] = temp1;
	char temp2 = ch [0];
	ch [0] = ch [1];
	ch [1] = temp2;
	} 
	system.output.printn(ch);
	}
}
	</div>
</body>
</html>