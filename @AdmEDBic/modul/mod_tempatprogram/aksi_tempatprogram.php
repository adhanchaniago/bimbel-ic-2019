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
if ($module=='tempatprogram' AND $act=='update'){

		mysql_query("UPDATE tb_tempatprogram SET tempat_program_name 	= '$_POST[nama]'
                            WHERE tempat_program_id	= '$_POST[id]'");
                           // echo $sql; exit;

  header('location:../../media.php?module='.$module);
}
// Update Hapus kategori
if ($module=='tempatprogram' AND $act=='hapus'){

	mysql_query("DELETE FROM tb_tempatprogram WHERE tempat_program_id='$_GET[id]'");
	header('location:../../media.php?module='.$module);
  
}

// Update Tambah kategori
if ($module=='tempatprogram' AND $act=='insertnew'){
  
  	$nama_seo 	  = seo_title($_POST['nama']);

	mysql_query("INSERT INTO tb_tempatprogram(tempat_program_name) 
                            VALUES('$_POST[nama]')");
                            //echo $sql; exit;
	
  header('location:../../media.php?module='.$module);
}

}
?>