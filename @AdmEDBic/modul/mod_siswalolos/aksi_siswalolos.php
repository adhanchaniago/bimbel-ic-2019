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
if ($module=='siswalolos' AND $act=='hapus'){
	
	/*$tampil=mysql_query("SELECT * FROM articles WHERE id_articles='$_GET[id]'");
	while ($ex=mysql_fetch_array($tampil)){
	if($ex['image'] != ''){
	unlink("../../../joimg/articles/$ex[image]");}
	}
	
	$tampil=mysql_query("SELECT * FROM articles WHERE id_articles='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[gambar] != ''){
	unlink("../../../joimg/articles/$ex[image]");
	mysql_query("DELETE FROM articles WHERE id_articles='$_GET[id]'");
	}else {*/
	mysql_query("DELETE FROM siswalolos WHERE id_siswalolos='$_GET[id]'");
	//}
  header('location:../../media.php?module='.$module);
}

// Update
if ($module=='siswalolos' AND $act=='update'){
  
 /* $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $judul_seo      = seo_title($_POST[nama]);

  $img_seo		  = substr($judul_seo, 0, 75);
  $nama_web		  = 'mystudio';
  $nama_file_unik = $nama_web.$acak.$img_seo.$nama_file; 
  
	if(!empty($lokasi_file)){
	
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
        window.location=("../../media.php?module=<?php echo $module.'&act=edit&id='.$_POST['id'] ?>")</script>;
    <?php die();}
  
	$tampil=mysql_query("SELECT * FROM articles WHERE id_articles='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[image] != ''){
		unlink("../../../joimg/articles/$ex[image]");
		}
	
	UploadArticles($nama_file_unik);*/
	// Proses watermark image
	//watermark_image("../../../joimg/articles/$nama_file_unik", "../../../joimg/articles/$nama_file_unik");
/*  
    mysql_query("UPDATE articles SET title			 	= '$_POST[nama]',
									content 			=  '".mysql_real_escape_string($_POST[deskripsi])."',
									image				= '$nama_file_unik',
									date				= '$tgl_sekarang',
									seo 				= '$judul_seo'
                            WHERE id_articles			= '$_POST[id]'");
	}
	else{*/
	mysql_query("UPDATE siswalolos SET 
										content			=  '".mysql_real_escape_string($_POST[deskripsi])."',
										date			= '$tgl_sekarang',
										seo 				= 'lembaga-konsultasi-dan-bimbingan-belajar',
										id_logosiswalolos ='$_POST[id_logosiswalolos]'
                            WHERE id_siswalolos			= '$_POST[id]'");
                            //echo $sql; exit();
//	}
	
  header('location:../../media.php?module='.$module);
}

// Insert
if ($module=='siswalolos' AND $act=='insertnew'){
  
 /* $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $judul_seo      = seo_title($_POST[nama]);
  
  $img_seo		  = substr($judul_seo, 0, 75);
  $nama_web		  = 'mystudio';
  $nama_file_unik = $nama_web.$acak.$img_seo.$nama_file; 
  
	if(!empty($lokasi_file)){
	
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
        window.location=("../../media.php?module=<?php echo $module.'&act=insertnew' ?>")</script>;
    <?php die();}
  
	UploadArticles($nama_file_unik);*/
	// Proses watermark image
	//watermark_image("../../../joimg/articles/$nama_file_unik", "../../../joimg/articles/$nama_file_unik");
  
   /* mysql_query("INSERT INTO articles(
    								title,
									content,
									date,
									image,
									seo) 
                            VALUES(
									'$_POST[nama]',
								    '".mysql_real_escape_string($_POST[deskripsi])."',
									'$tgl_sekarang',
								    '$nama_file_unik',
								    '$judul_seo' )");
	}
	else{*/
	mysql_query("INSERT INTO siswalolos(
									date,
									content,
									seo,id_logosiswalolos) 
                            VALUES(
							
									'$tgl_sekarang',
									'".mysql_real_escape_string($_POST[deskripsi])."',
									'$judul_seo','$_POST[id_logosiswalolos]' )");
									//echo $sql; exit;
	//}
	
	
  header('location:../../media.php?module='.$module);
}

}
?>