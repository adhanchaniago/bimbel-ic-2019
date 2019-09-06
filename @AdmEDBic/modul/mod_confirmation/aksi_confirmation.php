<?php
session_start();
error_reporting(0);
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


// Hapus
if ($module=='confirmation' AND $act=='hapus'){	
	
	$tampil=mysql_query("SELECT * FROM daftar_online WHERE daftar_id='$_GET[id]'");
		//echo $sql; exit;
			$ex=mysql_fetch_array($tampil);
				//if($ex['gambar'] != ''){
				unlink("../../../joimg/daftar-online/$ex[bukti_pembayaran]");
				unlink("../../../joimg/daftar-online/$ex[foto_peserta]");
			//	}

	mysql_query("DELETE FROM daftar_online WHERE daftar_id='$_GET[id]'");
	
  header('location:../../media.php?module='.$module);
}
// Hapus pesan
if ($module=='confirmation' AND $act=='update2'){
	
		mysql_query("UPDATE konfirmasi SET approve = '$_POST[aktif]' 
                            WHERE id_konfirmasi = '$_POST[id]'");
	
  header('location:../../media.php?module='.$module);
}


// Hapus pesan
if ($module=='confirmation' AND $act=='kirimemail'){
	
		mysql_query("UPDATE konfirmasi SET approve = '$_POST[aktif]' 
                            WHERE id_konfirmasi = '$_POST[id]'");
	
  header('location:../../media.php?module='.$module);
}


}
?>
