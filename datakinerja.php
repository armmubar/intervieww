<?php 
  include("koneksi.php");
  $output="SELECT * FROM rapot";
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
                <a href="datakinerja.php">Home</a>
            </li>
            <li>
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
       <h3 align="center">Data Penilaian Karyawan</h3>
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
              <table id="dataTables-example" class="table table-striped table-bordered table-hover">
                  <thead>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>Tepat Waktu</th>
                        <th>Kedisplinan</th>
                        <th>Kerapihan</th>
                        <th>Keramahan</th>
                        <th>Tanggung Jawab</th>
                        <th>Komunikasi</th>
                        <th>Rasa Simpati dan Empati</th>
                        <th>Pelayanan Kepada Konsumen</th>
                        <th>Pengetahuan Kemampuan Teknis</th>
                        <th>Efisensi dan Efektif Kerja</th>
                        <th>Kerja Sama Dalam Bekerja</th>
                        <th>Kecepatan Dalam Bekerja</th>
                        <th>Kreatifitas Dalam Bekerja</th>
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
                          <td><?php echo $r['nip']; ?></td>
                          <td><?php echo $r['namalengkap']; ?></td>
                          <td><?php echo $r['tepatwaktu']; ?></td>
                          <td><?php echo $r['kedisplinan']; ?></td>
                          <td><?php echo $r['kerapihan']; ?></td>
                          <td><?php echo $r['keramahan']; ?></td>
                          <td><?php echo $r['tanggungjawab']; ?></td>
                          <td><?php echo $r['komunikasi']; ?></td>
                          <td><?php echo $r['rasasimpatiempati']; ?></td>
                          <td><?php echo $r['pelayanankepadakonsumen']; ?></td>
                          <td><?php echo $r['pengetahuankemampuanteknis']; ?></td>
                          <td><?php echo $r['efesiensiefektifkerja']; ?></td>
                          <td><?php echo $r['kerjasamadalambekerja']; ?></td>
                          <td><?php echo $r['kecepatandalambekerja']; ?></td>
                          <td><?php echo $r['kreatifitasdalambekerja']; ?></td>
                          <td><?php echo $r['keterangan']; ?></td>
                          <td>
                            <a href="hapuskinerja.php?id=<?php echo $r['nip'] ?>" class="btn btn-default" onclick="return confirm('Apakah yakin ingin di hapus?');">Hapus</a>
                          </td>
                          
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
