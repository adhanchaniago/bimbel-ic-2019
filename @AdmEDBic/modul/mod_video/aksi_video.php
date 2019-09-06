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

	$module=$_GET['module'];
	$act=$_GET['act'];

	// Update video
	if ($module=='video' AND $act=='update'){
	 
	  
		mysql_query("UPDATE video SET 	judul 			= '$_POST[name]',
										asal_sekolah	= '$_POST[asal_sekolah]',
										diterima		= '$_POST[diterima]',
										deskripsi		= '$_POST[deskripsi]',
										video 			= '$_POST[link]',
										tanggal 		= now()
								WHERE id				= '$_POST[id]'");
		
	  header('location:../../media.php?module='.$module);
	}
	// Hapus video
	if ($module=='video' AND $act=='hapus'){
		mysql_query("DELETE FROM video WHERE id='$_GET[id]'");
	  header('location:../../media.php?module='.$module);
	}

	// Update Tambah video
	if ($module=='video' AND $act=='insertnew'){	  
		mysql_query("INSERT INTO video(judul,
										asal_sekolah,
										diterima,
										deskripsi,
										video,
										tanggal) 
								VALUES('$_POST[name]',
										'$_POST[asal_sekolah]',
										'$_POST[diterima]',
										'$_POST[deskripsi]',
										'$_POST[link]',
										now())");
		
		header('location:../../media.php?module='.$module);
	}

}
?>
