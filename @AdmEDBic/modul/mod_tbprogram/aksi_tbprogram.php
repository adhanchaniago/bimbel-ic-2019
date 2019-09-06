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
if ($module=='tbprogram' AND $act=='update'){

		
		mysql_query("UPDATE tb_program SET program_name 	= '$_POST[nama]'
                            WHERE program_id	= '$_POST[id]'");

  header('location:../../media.php?module='.$module);
}
// Update Hapus kategori
if ($module=='tbprogram' AND $act=='hapus'){

	mysql_query("DELETE FROM tb_program WHERE program_id='$_GET[id]'");
	header('location:../../media.php?module='.$module);
  
}

// Update Tambah kategori
if ($module=='tbprogram' AND $act=='insertnew'){
  
  	$nama_seo 	  = seo_title($_POST['nama']);

	mysql_query("INSERT INTO tb_program(program_name) 
                            VALUES('$_POST[nama]')");
                           // echo $sql; exit;
	
  header('location:../../media.php?module='.$module);
}

}
?>