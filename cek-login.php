<?php

include "koneksi.php";

if (isset ($_POST ['login'])) {
	$username = htmlspecialchars ($_POST ['username']);
	$password = htmlspecialchars ($_POST ['password']);

$login="SELECT * FROM user WHERE username='$username' AND password='$password'";
$querylogin=mysqli_query($koneksi,$login);



// Apabila username dan password ditemukan
if ($row = mysqli_fetch_assoc($querylogin))
{
  $_SESSION['user']['login']=TRUE;
		$_SESSION['user']['username']=$username;
		$_SESSION['login']['password']=$password;
		// redirect ke index.php
		header('location: datakaryawan.php');
	}
	else 
{
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input type=button value='ULANGI LAGI' onclick=location.href='index.php'></a></center>";

}
}
?>
