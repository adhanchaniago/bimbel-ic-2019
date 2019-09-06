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

$module=$_GET[module];
$act=$_GET[act];

// Update sosmed
if ($module=='kontak' AND $act=='update'){
		
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
		  
			$tampil=mysql_query("SELECT * FROM kontakk WHERE id_kontak='$_POST[id]'");
			$ex=mysql_fetch_array($tampil);
				if($ex['gambar'] != ''){
					unlink("../../../joimg/hubungikami/$ex[gambar]");
				}
			
			UploadHubungikami($nama_file_unik);

			mysql_query("UPDATE kontakk SET 	alamat 	= '$_POST[alamat]',phone='$_POST[phone]',
											gambar = '$nama_file_unik'
		                            WHERE id_kontak  = '$_POST[id]'");
		                         // echo $sql; exit;
		}
		else{
			mysql_query("UPDATE kontakk SET 	alamat = '$_POST[alamat]',phone='$_POST[phone]'
								WHERE id_kontak  = '$_POST[id]'");
		}
  header('location:../../media.php?module='.$module);
}
// Hapus Sosmed
if ($module=='kontak' AND $act=='hapus'){

		$tampil=mysql_query("SELECT * FROM kontakk WHERE id_kontak='$_GET[id]'");
		$ex=mysql_fetch_array($tampil);

		if($ex[gambar] != ''){
			unlink("../../../joimg/hubungikami/$ex[gambar]");
			mysql_query("DELETE FROM kontakk WHERE id_kontak='$_GET[id]'");
		}else{
			mysql_query("DELETE FROM kontakk WHERE id_kontak='$_GET[id]'");
		}
		header('location:../../media.php?module='.$module);
}

// Update Tambah sosmed
if ($module=='kontak' AND $act=='insertnew'){
/*  
	mysql_query("INSERT INTO sosmed(nama,
									link) 
                            VALUES('$_POST[nama]',
									'$_POST[link]')");
	header('location:../../media.php?module='.$module);
*/
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

			UploadHubungikami($nama_file_unik);
	  
			mysql_query("INSERT INTO kontakk(alamat,phone, gambar) 
								VALUES('$_POST[alamat]','$_POST[phone]', '$nama_file_unik')");
		}else{
			mysql_query("INSERT INTO kontakk(alamat,phone) 
								VALUES('$_POST[alamat]','$_POST[phone]')");
		}
		
		header('location:../../media.php?module='.$module);
}
}
?>