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
if ($module=='programcategory' AND $act=='update'){
  
		
		mysql_query("UPDATE programcategory SET programcategory_name 	= '$_POST[nama]',
												program_id = '$_POST[program]'
                            WHERE programcategory_id	= '$_POST[id]'");	
                            //echo $sql; exit;

    
  header('location:../../media.php?module='.$module);
}
// Update Hapus kategori
if ($module=='programcategory' AND $act=='hapus'){

	mysql_query("DELETE FROM programcategory WHERE programcategory_id='$_GET[id]'");
	header('location:../../media.php?module='.$module);

}

// Update Tambah kategori
if ($module=='programcategory' AND $act=='insertnew'){


	mysql_query("INSERT INTO programcategory(programcategory_name,program_id) 
                            VALUES('$_POST[nama]','$_POST[program]')");
	
  header('location:../../media.php?module='.$module);
}

}
?>