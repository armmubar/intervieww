<?php 
  include("koneksi.php");
  $output="SELECT * FROM data_karyawan";
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
            <li class="active">
                <a href="datakaryawan.php">Home</a>
            </li>
            <li>
                <a href="inputdatakaryawan.php">Input Data Karyawan</a>
            </li>
            <li>
                <a href="inputdata.php">Input Data Penilaian Karyawan</a>
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
    <!-- Akhir dari navbar -->



    <div class="container">
       <h3 align="center">Data Karyawan</h3>
       <form class="navbar-form navbar-right">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="search" id="myInput">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>      
        </form> 
<div class="container">
           <div class="panel-body">
          <div class="table-responsive"></div>
              <table color="#FFFFFF" id="dataTables-example" class="table table-striped table-bordered table-hover">
                  <thead>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Jabatan</th>
                        <th>Alamat Tetap</th>
                        <th>Alamat Sekarang</th>
                        <th>Email</th>
                        <th>Nomor Hp</th>
                        <th>Cuti</th>
                        <th>Keterangan</th>
                        
                  </thead>
                  <tbody id="myTable">
                       <?php
                          $no=1; 
                          if (mysqli_num_rows($query)==0) {
                            echo "Tidak ada data";
                            }else{
                              while ($r=mysqli_fetch_array($query)) :
                          ?>
                        <tr>
                          <td><?php echo "$no"; ?></td>
                          <td><?php echo $r['NIP']; ?></td>
                          <td><?php echo $r['NamaLengkap']; ?></td>
                          <td><?php echo $r['TempatLahir']; ?></td>
                          <td><?php echo $r['TanggalLahir']; ?></td>
                          <td><?php echo $r['JenisKelamin']; ?></td>
                          <td><?php echo $r['Agama']; ?></td>
                          <td><?php echo $r['Jabatan']; ?></td>
                          <td><?php echo $r['AlamatTetap'];?></td>
                          <td><?php echo $r['AlamatSekarang'];?></td>
                          <td><?php echo $r['Email'];?></td>
                          <td><?php echo $r['NomorHp'];?></td>
                          <td><?php echo $r['Cuti'];?></td>
                          <td><?php echo $r['Keterangan']; ?></td>
                          
                        </tr>
                        <?php
                          $no++; 
                          endwhile;
                          }
                         ?>
                  </tbody>
              </table>
            </div>
            </div>
        </div>              
    </div>
    <script>
      // script buat toogle yang dikanan kalo layar dikecilin
        $(document).ready(function(){
            $("#myInput").on("keyup",function(){
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)
                });
            });
        });

        // script untuk data table
        $(function() {
          $('#example1').dataTable();
        });
    </script>
</body>
</html>
