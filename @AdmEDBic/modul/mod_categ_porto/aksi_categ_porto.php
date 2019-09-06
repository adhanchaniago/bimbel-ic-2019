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
  	include "../../../josys/watermark.php";
	$module=$_GET['module'];
	$act=$_GET['act'];

	// Update categ_porto
	if ($module=='categ_porto' AND $act=='update'){
	   	  
	   	$lokasi_file    = $_FILES['fupload']['tmp_name'];
		  $tipe_file      = $_FILES['fupload']['type'];
		  $nama_file      = $_FILES['fupload']['name'];
      $acak           = rand(000,999);
      $nama_seo       = seo_title($_POST['nama']);

      $nama_web       = 'mystudio';
      $nama_seo_cut   = substr($nama_seo, 0,50);
      $nama_file_unik = $nama_web.$acak.$nama_seo_cut.$nama_file; 
		  
		if(!empty($lokasi_file)){
			
			if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
		    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
		        window.location=("../../media.php?module=<?php echo $module.'&act=edit&id='.$_POST['id'] ?>")</script>;
		    <?php die();}
		  
			$tampil=mysql_query("SELECT * FROM categ_porto WHERE id_categ_porto='$_POST[id]'");
			$ex=mysql_fetch_array($tampil);
				if($ex['gambar'] != ''){
				unlink("../../../joimg/categ_porto/$ex[gambar]");
				}
			
			UploadCategPorto($nama_file_unik);
      watermark_image("../../../joimg/categ_porto/$nama_file_unik", "../../../joimg/categ_porto/$nama_file_unik");
		
			mysql_query("UPDATE categ_porto SET 	nama 	= '$_POST[nama]', nama_seo = '$nama_seo', gambar = '$nama_file_unik'
								WHERE id_categ_porto  = '$_POST[id]'");
		}
		else{
			mysql_query("UPDATE categ_porto SET 	nama  = '$_POST[nama]', nama_seo = '$nama_seo'
								WHERE id_categ_porto  = '$_POST[id]'");
		}
		header('location:../../media.php?module='.$module);
	}
	// Update Hapus Message
	if ($module=='categ_porto' AND $act=='hapus'){	  
	
		$tampil=mysql_query("SELECT * FROM categ_porto WHERE id_categ_porto='$_GET[id]'");
		$ex=mysql_fetch_array($tampil);

		if($ex[gambar] != ''){
			unlink("../../../joimg/categ_porto/$ex[gambar]");
			mysql_query("DELETE FROM categ_porto WHERE id_categ_porto='$_GET[id]'");
		}else{
			mysql_query("DELETE FROM categ_porto WHERE id_categ_porto='$_GET[id]'");
		}
		header('location:../../media.php?module='.$module);
	}

	// Update Tambah categ_porto
	if ($module=='categ_porto' AND $act=='insertnew'){  
		
		  $lokasi_file    = $_FILES['fupload']['tmp_name'];
			$tipe_file      = $_FILES['fupload']['type'];
			$nama_file      = $_FILES['fupload']['name'];
			$acak           = rand(000,999);
			$nama_seo       = seo_title($_POST['nama']);

      $nama_web       = 'mystudio';
      $nama_seo_cut   = substr($nama_seo, 0,50);
      $nama_file_unik = $nama_web.$acak.$nama_seo_cut.$nama_file; 

			if(!empty($lokasi_file)){

			if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
			<script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
			    window.location=("../../media.php?module=<?php echo $module.'&act=edit&id='.$_POST['id'] ?>")</script>;
			<?php die();}

			UploadCategPorto($nama_file_unik);
	    watermark_image("../../../joimg/categ_porto/$nama_file_unik", "../../../joimg/categ_porto/$nama_file_unik");

			mysql_query("INSERT INTO categ_porto(nama, nama_seo, gambar) 
								VALUES('$_POST[nama]', '$nama_seo', '$nama_file_unik')");
		}else{
			mysql_query("INSERT INTO categ_porto(nama, nama_seo) 
								VALUES('$_POST[nama]', '$nama_seo')");
		}
		
		header('location:../../media.php?module='.$module);
	}

}
?>