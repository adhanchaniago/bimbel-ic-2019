<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../josys/koneksi.php";
include "../../../josys/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];


// Update Hapus Message
if ($module=='subscribe' AND $act=='hapus'){
  
	$id = $_GET['id'];
	
    mysql_query("DELETE FROM subscribe WHERE id_subscribe='$id'");
 
  header('location:../../media.php?module='.$module);
}

}
?>
