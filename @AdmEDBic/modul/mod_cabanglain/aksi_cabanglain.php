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
include "../../../josys/library.php";

$module=$_GET[module];
$act=$_GET[act];

// DELETE
if ($module=='cabanglain' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM cabanglain WHERE id_cabanglain='$_GET[id]'");
	while ($ex=mysql_fetch_array($tampil)){
	if($ex['gambar'] != ''){
	unlink("../../../joimg/cabanglain/$ex[gambar]");
	unlink("../../../joimg/cabanglain/small_$ex[gambar]");
	}
	}
	
	$tampil=mysql_query("SELECT * FROM cabanglain WHERE id_cabanglain='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/cabanglain/$ex[gambar]");
	unlink("../../../joimg/cabanglain/small_$ex[gambar]");
	mysql_query("DELETE FROM cabanglain WHERE id_cabanglain='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM cabanglain WHERE id_cabanglain='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update
if ($module=='cabanglain' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
  $judul_seo      = seo_title($_POST[nama]);
  
	if(!empty($lokasi_file)){
	
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
        window.location=("../../media.php?module=<?php echo $module.'&act=edit&id='.$_POST['id'] ?>")</script>;
    <?php die();}
  
	$tampil=mysql_query("SELECT * FROM cabanglain WHERE id_cabanglain='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../joimg/cabanglain/$ex[gambar]");
		unlink("../../../joimg/cabanglain/small_$ex[gambar]");
		}
	
	UploadCabanglain($nama_file_unik);
  
   mysql_query("UPDATE cabanglain SET 	
									nama			 	= '$_POST[nama]',
									isi					=  '$_POST[deskripsi]',
									gambar				= '$nama_file_unik',
									tanggal				= '$_POST[tanggal]'
                            WHERE id_cabanglain	       	= '$_POST[id]'");
                          //  echo $sql; exit;
	}
	else{
	mysql_query("UPDATE cabanglain SET 	
									nama			 	= '$_POST[nama]',
									isi 				=  '$_POST[deskripsi]',
									tanggal				= '$_POST[tanggal]'
                            WHERE id_cabanglain     	= '$_POST[id]'");
	}
	
  header('location:../../media.php?module='.$module);
}

// Update Room Type
if ($module=='cabanglain' AND $act=='insertnew'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
	
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
        window.location=("../../media.php?module=<?php echo $module.'&act=edit&id='.$_POST['id'] ?>")</script>;
    <?php die();}
  
	UploadCabanglain($nama_file_unik);
  
   mysql_query("INSERT INTO cabanglain(
									nama,
									isi,
									gambar,
									tanggal) 
                            VALUES(
                                   '$_POST[nama]',
								   '".mysql_real_escape_string($_POST[deskripsi])."',
								   '$nama_file_unik',
								   '$_POST[tanggal]')");
								//   echo $sql; exit();
	}
	else{
	mysql_query("INSERT INTO cabanglain(
									nama, isi, tanggal) 
                            VALUES(
                                   '$_POST[nama]',
								   '".mysql_real_escape_string($_POST[deskripsi])."',
								   '$_POST[tanggal]')");
	}
		
  header('location:../../media.php?module='.$module);
}
}
?>