<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
	echo "
		<link href='style.css' rel='stylesheet' type='text/css'>
		<center>Untuk mengakses modul, Anda harus login <br>
		<a href=../../index.php><b>LOGIN</b></a></center>
	";
}
else{
	include_once "../../../josys/koneksi.php";
	include_once "../../../josys/helper.php";

	$module=$_GET['module'];
	$act=$_GET['act'];


	# store informasi bimbel
	if ($module=='informasi-bimbel' AND $act=='insertnew'){
		$array_post= [
			'texts'=> $_POST['texts']
		];
		if ( insert_update("get_informations",$array_post) ) {
			echo "
				<script>alert('Data berhasil dihapus');window.history.back();</script>
			";
		}else{
			echo "
				<script>alert('Data gagal dihapus');window.history.back();</script>
			";
		}
	}

	# update informasi bimbel
	if ( $module=='informasi-bimbel' AND $act=='update' ) {
		$array_post= [
			'texts'=> $_POST['texts']
		];
		if ( insert_update("get_informations",$array_post,"get_information_id='{$_POST['id']}'") ) {
			echo "
				<script>alert('Data berhasil diubah');window.history.go(-2)</script>
			";
		}else{
			echo "
				<script>alert('Data gagal diubah');window.history.back();</script>
			";
		}
	}

	# delete informasi bimbel
	if ($module=='informasi-bimbel' AND $act=='hapus'){
		# check foreign key
		$daftar_online_num_rows = count_rows("SELECT * FROM daftar_online WHERE get_information_id='{$_GET['id']}' ");
		if ( $daftar_online_num_rows > 0 ) {
			echo "
				<script>alert('Maaf data ini tidak bisa dihapus');window.history.back();</script>
			";

		} else {
			# no foreign key delete this
			if ( delete("DELETE FROM get_informations WHERE get_information_id='{$_GET['id']}' ") ) {
				echo "
					<script>alert('Data berhasil dihapus');window.history.back();</script>
				";
			}else{
				echo "
					<script>alert('Data gagal dihapus');window.history.back();</script>
				";
			}
			
		}
	}
}
?>