<?php
error_reporting(0);
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
if ($module=='bimbingan' AND $act=='update'){
  
  $nama_seo 	  = seo_title($_POST['nama']);
		
		mysql_query("UPDATE tb_bimbingan SET bimbingan_name 	= '$_POST[nama]', asrama='$_POST[asrama]'
                            WHERE bimbingan_id	= '$_POST[id]'");

    mysql_query("DELETE FROM tb_tmp_program WHERE bimbingan_id='$_POST[id]'");

    mysql_query("DELETE FROM tb_tmp_kelas WHERE bimbingan_id='$_POST[id]'");

    mysql_query("DELETE FROM tb_tmp_asrama WHERE bimbingan_id='$_POST[id]'");

        //PROGRAM
     $data_program=$_POST['program'];
          foreach ($data_program as $isi_program) {
                $sql_program="INSERT INTO tb_tmp_program VALUES ('','$isi_program','$_POST[id]')";
                $result_program=mysql_query($sql_program);          
                } 
    //KELAS
      $data_kelas=$_POST['kelas'];
          foreach ($data_kelas as $isi_kelas) {
                    $sql_kelas="INSERT INTO tb_tmp_kelas VALUES ('','$isi_kelas','$_POST[id]')";
                    $result_kelas=mysql_query($sql_kelas);      

                }
    //KELAS
      $data_asrama=$_POST['asrama'];
          foreach ($data_asrama as $isi_asrama) {
                    $sql_asrama="INSERT INTO tb_tmp_asrama VALUES ('','$isi_asrama','$_POST[id]')";
                    $result_asrama=mysql_query($sql_asrama);      

                }    


  header('location:../../media.php?module='.$module);
}
// Update Hapus kategori
if ($module=='bimbingan' AND $act=='hapus'){

	mysql_query("DELETE FROM tb_bimbingan WHERE bimbingan_id='$_GET[id]'");

  mysql_query("DELETE FROM tb_tmp_program WHERE bimbingan_id='$_GET[id]'");

  mysql_query("DELETE FROM tb_tmp_kelas WHERE bimbingan_id='$_GET[id]'");

	header('location:../../media.php?module='.$module);
  
}

    // Update Tambah kategori
if ($module=='bimbingan' AND $act=='insertnew'){
  
    // $nama_seo 	  = seo_title($_POST['nama']);

    //echo "Kelas : ".
    $sql_bimbingan="INSERT INTO tb_bimbingan VALUES ('','$_POST[nama]')";
    $result_bimbingan=mysql_query($sql_bimbingan);
    $bimbingan_id=mysql_insert_id();
    if($result_bimbingan){
      
    //PROGRAM
     $data_program=$_POST['program'];
          foreach ($data_program as $isi_program) {
                $sql_program="INSERT INTO tb_tmp_program VALUES ('','$isi_program','$bimbingan_id')";
                $result_program=mysql_query($sql_program);          
                } 
    //KELAS
      $data_kelas=$_POST['kelas'];
          foreach ($data_kelas as $isi_kelas) {
                    $sql_kelas="INSERT INTO tb_tmp_kelas VALUES ('','$isi_kelas','$bimbingan_id')";
                    $result_kelas=mysql_query($sql_kelas);      

                }

      //ASRAMA
      $asrama=$_POST['asrama'];
          foreach ($asrama as $isi_asrama) {
            $sql_asrama="INSERT INTO tb_tmp_asrama VALUES ('','$isi_asrama','$bimbingan_id')";
            $result_asrama=mysql_query($sql_asrama);      

          }

    }


  header('location:../../media.php?module='.$module);
}

}
?>