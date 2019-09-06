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

	// Hapus
	if ($module=='product' AND $act=='hapus'){
		
		$tampil=mysql_query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
		$ex=mysql_fetch_array($tampil);

		if($ex['gambar'] != ''){
			unlink("../../../joimg/produk/$ex[gambar]");
			unlink("../../../joimg/produk/small/small_$ex[gambar]");
			unlink("../../../joimg/produk/watermark/wm_$ex[gambar]");

			mysql_query("DELETE FROM produk WHERE id_produk='$_GET[id]'");
		}else {
			mysql_query("DELETE FROM produk WHERE id_produk='$_GET[id]'");
		}
	  header('location:../../media.php?module='.$module);
	}

	// Update
	if ($module=='product' AND $act=='update'){
	  
		$lokasi_file    = $_FILES['fupload']['tmp_name'];
		$tipe_file      = $_FILES['fupload']['type'];
		$nama_file      = $_FILES['fupload']['name'];

		$nama_seo 		= seo_title($_POST['nama_produk']);
		$acak           = rand(000,999);

		$nama_web		= 'mystudio';
		$nama_seo_cut	= substr($nama_seo, 0,50);

		$nama_file_unik = $nama_web.$acak.$nama_seo_cut.$nama_file; 
		$deskripsi = mysql_real_escape_string($_POST['deskripsi']);
	  
		if(!empty($lokasi_file)){
		
		if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
	    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
	        window.location=("../../media.php?module=<?php echo $module.'&act=edit&id='.$_POST['id'] ?>")</script>;
	    <?php die();}

		$tampil=mysql_query("SELECT gambar FROM produk WHERE id_produk='$_POST[id]'");
		$ex=mysql_fetch_array($tampil);
			if($ex['gambar'] != ''){
				unlink("../../../joimg/produk/$ex[gambar]");
			}
		
		UploadProduk($nama_file_unik);
		watermark_image("../../../joimg/produk/$nama_file_unik", "../../../joimg/produk/$nama_file_unik");
		
	  
		mysql_query("UPDATE produk SET 		id_kategori		= '$_POST[kategori]',
											kodeproduk		= '$_POST[kodeproduk]',
											nama_produk		= '$_POST[nama_produk]',
											produk_seo		= '$nama_seo',
											deskripsi		= '$deskripsi',
											harga			= '$_POST[harga]',
											discount		= '$_POST[discount]',
											tag 			= '$_POST[tag]',
											gambar 			= '$nama_file_unik'
										WHERE id_produk		= '$_POST[id]'");
		}else{
	  
			mysql_query("UPDATE produk SET 	id_kategori		= '$_POST[kategori]',
											kodeproduk		= '$_POST[kodeproduk]',
											nama_produk		= '$_POST[nama_produk]',
											produk_seo		= '$nama_seo',
											deskripsi		= '$deskripsi',
											harga			= '$_POST[harga]',
											discount		= '$_POST[discount]',
											tag 			= '$_POST[tag]'
										WHERE id_produk		= '$_POST[id]'");										
		}
		header('location:../../media.php?module='.$module);
	}

	// Insert new
	if ($module=='product' AND $act=='insertnew'){
	  
		$lokasi_file    = $_FILES['fupload']['tmp_name'];
		$tipe_file      = $_FILES['fupload']['type'];
		$nama_file      = $_FILES['fupload']['name'];

		$nama_seo 		= seo_title($_POST['nama_produk']);
		$acak           = rand(000,999);

		$nama_web		= 'mystudio';
		$nama_seo_cut	= substr($nama_seo, 0,50);

		$nama_file_unik = $nama_web.$acak.$nama_seo_cut.$nama_file; 
		$deskripsi = mysql_real_escape_string($_POST['deskripsi']);

		if(!empty($lokasi_file)){
	  	
	  	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg" AND $tipe_file != "image/gif" AND $tipe_file != "image/png"){?>
	    <script>window.alert("Upload Gagal, Pastikan File yang di Upload bertipe *.JPG, *.GIF, *.PNG");
	        window.location=("../../media.php?module=<?php echo $module.'&act=edit&id='.$_POST['id'] ?>")</script>;
	    <?php die();}

		UploadProduk($nama_file_unik);
		watermark_image("../../../joimg/produk/$nama_file_unik", "../../../joimg/produk/$nama_file_unik");
		
		mysql_query("INSERT INTO produk(id_kategori,
										tgl_masuk,
										kodeproduk,
										nama_produk,
										produk_seo,
										deskripsi,
										harga,
										discount,
										tag,
										gambar)  
								VALUES(
										'$_POST[kategori]',
										now(),
										'$_POST[kodeproduk]',
										'$_POST[nama_produk]',
										'$nama_seo',
										'$deskripsi',
										'$_POST[harga]',
										'$_POST[discount]',
										'$_POST[tag]',
										'$nama_file_unik')");

		}
		else{
		mysql_query("INSERT INTO produk(id_kategori,
										tgl_masuk,
										kodeproduk,
										nama_produk,
										produk_seo,
										deskripsi,
										harga,
										discount,
										tag)  
								VALUES(
										'$_POST[kategori]',
										now(),
										'$_POST[kodeproduk]',
										'$_POST[nama_produk]',
										'$nama_seo',
										'$deskripsi',
										'$_POST[harga]',
										'$_POST[discount]',
										'$_POST[tag]')");
		
		}
		
	  header('location:../../media.php?module='.$module);
	}

}
?>
