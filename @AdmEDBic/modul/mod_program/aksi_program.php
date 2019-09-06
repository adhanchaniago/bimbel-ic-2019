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
include "../../../josys/fungsi_seo.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Update category
if ($module=='program' AND $act=='update'){
  
		
		mysql_query("UPDATE program SET program_name 	= '$_POST[nama]'
                            WHERE program_id	= '$_POST[id]'");

  header('location:../../media.php?module='.$module);
}
// Update Hapus kategori
if ($module=='program' AND $act=='hapus'){

	mysql_query("DELETE FROM program WHERE program_id='$_GET[id]'");
	header('location:../../media.php?module='.$module);

}

// Update Tambah kategori
if ($module=='program' AND $act=='insertnew'){


	mysql_query("INSERT INTO program(program_name) 
                            VALUES('$_POST[nama]')");
	
  header('location:../../media.php?module='.$module);
}

}
?>