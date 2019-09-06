<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../josys/koneksi.php";
include "../../../josys/library.php";
include "../../../josys/fungsi_thumb.php";
include "../../../josys/fungsi_seo.php";
include "../../../josys/fungsi_indotgl.php";
include "../../../josys/watermark.php";

$module=$_GET[module];
$act=$_GET[act];



// Hapus header
if ($module=='subbimbingan' AND $act=='hapus'){
	
/*	$tampil=mysql_query("SELECT * FROM subbimbingan WHERE id_subbimbingan='$_GET[id]'");
	while ($ex=mysql_fetch_array($tampil)){
	if($ex['image'] != ''){
	unlink("../../../joimg/subbimbingan/$ex[image]");}
	}
	
	$tampil=mysql_query("SELECT * FROM subbimbingan WHERE id_subbimbingan='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/subbimbingan/$ex[image]");*/
	mysql_query("DELETE FROM subbimbingan WHERE id_subbimbingan='$_GET[id]'");
	/*}else {
	mysql_query("DELETE FROM subbimbingan WHERE id_subbimbingan='$_GET[id]'");
	}*/
  header('location:../../media.php?module='.$module);
}

// Update
if ($module=='subbimbingan' AND $act=='update'){
  
/*  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $judul_seo      = seo_title($_POST[nama]);

  $img_seo		  = substr($judul_seo, 0, 75);
  $nama_web		  = 'ic-';
  $nama_file_unik = $nama_web.$acak.$img_seo.$nama_file; 
  
	if(!empty($lokasi_file)){
	
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
        window.location=("../../media.php?module=<?php echo $module.'&act=edit&id='.$_POST['id'] ?>")</script>;
    <?php die();}
  
	$tampil=mysql_query("SELECT * FROM subbimbingan WHERE id_subbimbingan='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[image] != ''){
		unlink("../../../joimg/subbimbingan/$ex[image]");
		}
	
	UploadSubbimbingan($nama_file_unik);*/
	// Proses watermark image
	//watermark_image("../../../joimg/subbimbingan/$nama_file_unik", "../../../joimg/articles/$nama_file_unik");
  
    mysql_query("UPDATE subbimbingan SET title			 	= '$_POST[nama]',
									content 			=  '".mysql_real_escape_string($_POST[deskripsi])."',
									date				= '$tgl_sekarang',
									seo 				= '$judul_seo',
									program_id          = '$_POST[program_id]'
                            WHERE id_subbimbingan			= '$_POST[id]'");
                          //  echo $sql; exit;
	/*}
	else{
	mysql_query("UPDATE subbimbingan SET title 			 	= '$_POST[nama]',
										content			=  '".mysql_real_escape_string($_POST[deskripsi])."',
										date			= '$tgl_sekarang',
										seo 				= '$judul_seo',
										program_id       = '$_POST[program_id]',
                            WHERE id_subbimbingan			= '$_POST[id]'");
	}*/
	
  header('location:../../media.php?module='.$module);
}

// Insert
if ($module=='subbimbingan' AND $act=='insertnew'){
  
  /*$lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $judul_seo      = seo_title($_POST[nama]);
  
  $img_seo		  = substr($judul_seo, 0, 75);
  $nama_web		  = 'ic';
  $nama_file_unik = $nama_web.$acak.$img_seo.$nama_file; 
  
	if(!empty($lokasi_file)){
	
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
        window.location=("../../media.php?module=<?php echo $module.'&act=insertnew' ?>")</script>;
    <?php die();}
  
	UploadSubbimbingan($nama_file_unik);*/
	// Proses watermark image
	//watermark_image("../../../joimg/subbimbingan/$nama_file_unik", "../../../joimg/subbimbingan/$nama_file_unik");
  
/*    mysql_query("INSERT INTO subbimbingan(
    								title,
									content,
									date,
									image,
									seo,
									program_id) 
                            VALUES(
									'$_POST[nama]',
								    '".mysql_real_escape_string($_POST[deskripsi])."',
									'$tgl_sekarang',
								    '$nama_file_unik',
								    '$judul_seo',
								    '$_POST[program_id]' )");
	}
	else{*/
	mysql_query("INSERT INTO subbimbingan(
									title,
									date,
									content,
									seo,
									program_id) 
                            VALUES(
									'$_POST[nama]',
									'$tgl_sekarang',
									'".mysql_real_escape_string($_POST[deskripsi])."',
									'$judul_seo','$_POST[program_id]' )");
	//}
	
	
  header('location:../../media.php?module='.$module);
}

}
?>