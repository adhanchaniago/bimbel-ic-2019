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

	// Hapus portofolio
	if ($module=='portofolio' AND $act=='hapus'){
		
		$tampil=mysql_query("SELECT * FROM portofolio_img WHERE id_portofolio='$_GET[id]'");
		$ex=mysql_fetch_array($tampil);
		$del_img_produk=mysql_query("SELECT * FROM portofolio_img WHERE id_portofolio='$_GET[id]'");
		if($ex['gambar'] != ''){
			while($zx = mysql_fetch_array($del_img_produk)){
			unlink("../../../joimg/portofolio/$zx[gambar]");
			unlink("../../../joimg/portofolio/small/small_$zx[gambar]");
			}
			mysql_query("DELETE FROM portofolio WHERE id_portofolio='$_GET[id]'");
			mysql_query("DELETE FROM portofolio_img WHERE id_portofolio='$_GET[id]'");
		}else {
		mysql_query("DELETE FROM portofolio WHERE id_portofolio='$_GET[id]'");
		mysql_query("DELETE FROM portofolio_img WHERE id_portofolio='$_GET[id]'");
		}
	  header('location:../../media.php?module='.$module);
	}

	// Hapus Gambar portofolio
	if ($module=='portofolio' AND $act=='hapusgambar'){

		$tampil=mysql_query("SELECT * FROM portofolio_img WHERE id_porto_img='$_GET[id]'");
		$ex=mysql_fetch_array($tampil);
		
		if($ex['gambar'] != ''){
		unlink("../../../joimg/portofolio/$ex[gambar]");
		unlink("../../../joimg/portofolio/small/small_$ex[gambar]");
		mysql_query("DELETE FROM portofolio_img WHERE id_porto_img='$_GET[id]'");
		}else {
		mysql_query("DELETE FROM portofolio_img WHERE id_porto_img='$_GET[id]'");
		}
	  header('location:../../media.php?module='.$module);
	}

	// Update
	if ($module=='portofolio' AND $act=='update'){
	  
		$lokasi_file    = $_FILES['fupload']['tmp_name'];
		$tipe_file      = $_FILES['fupload']['type'];
		
		$nama_seo = seo_title($_POST['nama']);
		$deskripsi = mysql_real_escape_string($_POST['deskripsi']);
	  
		if(!empty($lokasi_file)){
		
		//$tampil=mysql_query("SELECT gambar FROM produkgambar WHERE id_produk='$_POST[id]'");
		//$ex=mysql_fetch_array($tampil);
		//	if($ex['gambar'] != ''){
		//		unlink("../../../joimg/produk/$ex[gambar]");
				//unlink("../../../joimg/produk/king-pheromone_$ex[gambar]");
			//}
		
		//UploadProduk($nama_file_unik);
		//watermark_image("../../../joimg/produk/$nama_file_unik", "../../../joimg/produk/$nama_file_unik");
		
	  
		mysql_query("UPDATE portofolio SET 	id_categ_porto	= '$_POST[kategori]',
											nama 			= '$_POST[nama]',
											nama_seo		= '$nama_seo',
											client 			= '$_POST[client]',
											tahun 			= '$_POST[tahun]',
											deskripsi		= '$deskripsi'
										WHERE id_portofolio	= '$_POST[id]'");

		//MULTI UPLOAD IMAGE
		$valid_formats = array("jpg", "png", "gif");
		//$max_file_size = 1024*100; //100 kb
		$path = "../../../joimg/portofolio/"; // Upload directory
		//$count = 0;

			if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
				// Loop $_FILES to execute all files
				foreach ($_FILES['fupload']['name'] as $f => $name) {     
				    if ($_FILES['fupload']['error'][$f] == 4) {
				        continue; // Skip file if any error found
				    }	       
				    if ($_FILES['fupload']['error'][$f] == 0) {	           
				        if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
							$message[] = "$name is not a valid format";
							continue; // Skip invalid file formats
						}
				        else{ // No error found! Move uploaded files 

							$nama_file      = $_FILES['fupload']['name'][$f];
							$nama_web		= 'mystudio';
							$nama_porto		= substr($nama_seo, 0,50);
							$acak           = rand(000,999);
							$nama_file_unik = $nama_web.$acak.$nama_porto.$nama_file;

				            if(move_uploaded_file($_FILES["fupload"]["tmp_name"][$f], $path.$nama_file_unik)) {
				   
	  							  $vfile_upload = $path . $nama_file_unik;

	  							 // Proses watermark image
	  							  watermark_image("../../../joimg/portofolio/$nama_file_unik", "../../../joimg/portofolio/$nama_file_unik");
				            	 
				            	 //identitas file asli
								  $im_src = imagecreatefromjpeg($vfile_upload);
								  $src_width = imageSX($im_src);
								  $src_height = imageSY($im_src);

								  //Simpan dalam versi small 350 pixel
								  //Set ukuran gambar hasil perubahan
								  $dst_width = 175;
								  $dst_height = ($dst_width/$src_width)*$src_height;

								  //proses perubahan ukuran
								  $im = imagecreatetruecolor($dst_width,$dst_height);
								  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

								  //Simpan gambar
								  imagejpeg($im,"../../../joimg/portofolio/small/" . "small_" . $nama_file_unik);
								  
								  //Hapus gambar di memori komputer
								  imagedestroy($im_src);
								  imagedestroy($im);

				            	//insert banyak gambar ke database produkgambar
				            	mysql_query("INSERT INTO portofolio_img(id_portofolio, gambar) VALUES('$_POST[id]', '$nama_file_unik')");
				            }
				        }
				    }
				}
			}
			//END MULTI UPLOAD IMAGE
		}else{
	  
			mysql_query("UPDATE portofolio SET 	id_categ_porto	= '$_POST[kategori]',
												nama 			= '$_POST[nama]',
												nama_seo		= '$nama_seo',
												client 			= '$_POST[client]',
												tahun			= '$_POST[tahun]',
												deskripsi		= '$deskripsi'
											WHERE id_portofolio	= '$_POST[id]'");				
		}
		header('location:../../media.php?module='.$module);
	}


	// Insert new
	if ($module=='portofolio' AND $act=='insertnew'){
	  
		$lokasi_file    = $_FILES['fupload']['tmp_name'];
		$tipe_file      = $_FILES['fupload']['type'];
		
		$nama_seo = seo_title($_POST['nama']);
		$deskripsi = mysql_real_escape_string($_POST['deskripsi']);
	  
		if(!empty($lokasi_file)){
	  
		//UploadProduk($nama_file_unik);
		//watermark_image("../../../joimg/produk/$nama_file_unik", "../../../joimg/produk/$nama_file_unik");
		
		mysql_query("INSERT INTO portofolio(id_categ_porto,
										nama,
										nama_seo,
										client,
										tahun,
										deskripsi)  
								VALUES(
										'$_POST[kategori]',
										'$_POST[nama]',
										'$nama_seo',
										'$_POST[client]',
										'$_POST[tahun]',
										'$deskripsi')");

		//ambil id_produk terakhir yang diinputkan
		$id_last_insert = mysql_fetch_array(mysql_query("SELECT last_insert_id() AS last_id_portofolio FROM portofolio"));
		$last_id_portofolio = $id_last_insert['last_id_portofolio'];

		//MULTI UPLOAD IMAGE
		$valid_formats = array("jpg", "png", "gif");
		//$max_file_size = 1024*100; //100 kb
		$path = "../../../joimg/portofolio/"; // Upload directory
		//$count = 0;

			if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
				// Loop $_FILES to execute all files
				foreach ($_FILES['fupload']['name'] as $f => $name) {     
				    if ($_FILES['fupload']['error'][$f] == 4) {
				        continue; // Skip file if any error found
				    }	       
				    if ($_FILES['fupload']['error'][$f] == 0) {	           
				        if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
							$message[] = "$name is not a valid format";
							continue; // Skip invalid file formats
						}
				        else{ // No error found! Move uploaded files 

				        	$nama_file      = $_FILES['fupload']['name'][$f];
							$nama_web		= 'mystudio';
							$nama_porto		= substr($nama_seo, 0,50);
							$acak           = rand(000,999);
							$nama_file_unik = $nama_web.$acak.$nama_porto.$nama_file;

				            if(move_uploaded_file($_FILES["fupload"]["tmp_name"][$f], $path.$nama_file_unik)) {
				   
	  							  $vfile_upload = $path . $nama_file_unik;

	  							  // Proses watermark image
	  							  watermark_image("../../../joimg/portofolio/$nama_file_unik", "../../../joimg/portofolio/$nama_file_unik");
				            	 
				            	 //identitas file asli
								  $im_src = imagecreatefromjpeg($vfile_upload);
								  $src_width = imageSX($im_src);
								  $src_height = imageSY($im_src);

								  //Simpan dalam versi small 350 pixel
								  //Set ukuran gambar hasil perubahan
								  $dst_width = 175;
								  $dst_height = ($dst_width/$src_width)*$src_height;

								  //proses perubahan ukuran
								  $im = imagecreatetruecolor($dst_width,$dst_height);
								  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

								  //Simpan gambar
								  imagejpeg($im,"../../../joimg/portofolio/small/" . "small_" . $nama_file_unik);
								  
								  //Hapus gambar di memori komputer
								  imagedestroy($im_src);
								  imagedestroy($im);

				            	//insert banyak gambar ke database portofolio_img
				            	mysql_query("INSERT INTO portofolio_img(id_portofolio, gambar) VALUES('$last_id_portofolio', '$nama_file_unik')");
				            }
				        }
				    }
				}
			}
			//END MULTI UPLOAD IMAGE
		}
		else{
		mysql_query("INSERT INTO portofolio(id_categ_porto,
										nama,
										nama_seo,
										client,
										tahun,
										deskripsi)  
								VALUES(
										'$_POST[kategori]',
										'$_POST[nama]',
										'$nama_seo',
										'$_POST[client]',
										'$_POST[tahun]',
										'$deskripsi')");
		}
		
	  header('location:../../media.php?module='.$module);
	}

}
?>
