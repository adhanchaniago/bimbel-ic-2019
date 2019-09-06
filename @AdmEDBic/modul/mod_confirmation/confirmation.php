<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>
<style type="text/css" title="currentStyle">
    @import "media/css/demo_table_jui.css";
    @import "media/css/smoothness/jquery-ui-1.8.4.custom.css";
</style>

<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js">
</script>

<script>
$(document).ready( function () {
     var oTable = $('#confirmation').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
<style>.ui-widget-header{background:none;border:none;}</style>

		
		<?php
		$aksi="modul/mod_confirmation/aksi_confirmation.php";
		switch($_GET['act']){
			default:
		?>
		<!-- comment -->
		<article class="module width_full">
			<header><h3>Daftar Online</h3></header>
			<table class='display' id='confirmation'> 
			<thead> 
				<tr>  
    				<th>No</th> 
    				<th>Foto</th> 
    				<th>Nama Peserta</th> 
    				<th>Jenis Kelamin</th> 
    				<th>Email</th> 
    				<th>Action</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$room = mysql_query("SELECT * FROM daftar_online ORDER BY daftar_id DESC");
				while($r=mysql_fetch_assoc($room)){
				?>
				<tr>  
    				<td align="center"><?php echo"$no" ?></td> 
    				<td align="center"><img src="../joimg/daftar-online/<?php echo"$r[foto_peserta]" ?>" style="width: 137px;"></td> 
    				<td align="center"><?php echo"$r[nama_peserta]" ?></td> 
    				<td align="center"><?php echo"$r[jenis_kelamin]" ?></td> 
    				<td align="center"><?php echo"$r[email]"; ?></td> 
					<td align="center"><a href="<?php echo"?module=confirmation&act=edit&id=$r[daftar_id]";?>"><input type="image" src="images/icn_edit.png" title="Detail"></a> &nbsp;<a href="<?php echo"$aksi?module=confirmation&act=hapus&id=$r[daftar_id]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>

			</tbody> 
			</table>
		</article>
		<!-- end of comment -->
		
		
		<?php break; 
		case "edit":
			$room = mysql_query("SELECT *
FROM
   tb_asrama
    INNER JOIN daftar_online 
        ON (tb_asrama.asrama_id = daftar_online.asrama_id)
    INNER JOIN tb_kelas 
        ON (tb_kelas.kelas_id = daftar_online.kelas_id)
    INNER JOIN tb_bimbingan 
        ON (tb_bimbingan.bimbingan_id = daftar_online.bimbingan_id)
    INNER JOIN tb_program 
        ON (tb_program.program_id = daftar_online.program_id)
    INNER JOIN tb_tempatprogram 
        ON (tb_tempatprogram.tempat_program_id = daftar_online.tempat_program_id) WHERE daftar_online.daftar_id='$_GET[id]'");
			$r=mysql_fetch_assoc($room);
			//$tgl = tgl_amerika($r['tanggal']);
		?>
		<article style="min-width:500px; float:none;" class="module width_quarter">
			 <header><h3>Detail Peserta Daftar Online</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_confirmation/aksi_confirmation.php?module=confirmation&act=update2'>
				<input type="hidden" name="id" value='<?php echo"$r[daftar_id]"; ?>'>
				<div class="module_content">
						
						<table>
							<tr><td><label>Foto Peserta</label></td><td>:</td><td>
							<img src="../joimg/daftar-online/<?php echo"$r[foto_peserta]" ?>" style="width: 237px;">
							</td></tr>
							<tr><td><label>Bukti Pembayaran</label></td><td>:</td><td> 
							<img src="../joimg/daftar-online/<?php echo"$r[bukti_pembayaran]" ?>" style="width: 237px;">
							</td></tr>
							<tr><td><label>Nama Peserta</label></td><td>:</td><td><?php echo"$r[nama_peserta]" ?></td></tr>
							<tr><td><label>Tempat Lahir</label></td><td>:</td><td><?php echo"$r[tempat_lahir]" ?></td></tr>
							<tr><td><label>Tanggal Lahir</label></td><td>:</td><td><?php echo"$r[tanggal_lahir]" ?></td></tr>
							<tr><td><label>Jenis Kelamin</label></td><td>:</td><td><?php echo"$r[jenis_kelamin]" ?></td></tr>
							<tr><td><label>Alamat Rumah</label></td><td>:</td><td><?php echo"$r[alamat_rumah]" ?></td></tr>
							<tr><td><label>Nomor HP Peserta</label></td><td>:</td><td><?php echo"$r[no_hp_peserta]" ?></td></tr>
							<tr><td><label>Email</label></td><td>:</td><td><?php echo"$r[email]" ?></td></tr>
							<tr><td><label>Asal Sekolah</label></td><td>:</td><td><?php echo"$r[asal_sekolah]" ?></td></tr>
							<tr><td><label>Nama Orang Tua</label></td><td>:</td><td><?php echo"$r[nama_ortu]" ?></td></tr>
							<tr><td><label>Pekerjaan</label></td><td>:</td><td><?php echo"$r[pekerjaan]" ?></td></tr>
							<tr><td><label>Nomor HP Ortu</label></td><td>:</td><td><?php echo"$r[no_hp_ortu]" ?></td></tr>
							<tr><td><label>Bimbingan</label></td><td>:</td><td><?php echo"$r[bimbingan_name]" ?></td></tr>
							<tr><td><label>Program</label></td><td>:</td><td><?php echo"$r[program_name]" ?></td></tr>
							<tr><td><label>Kelas</label></td><td>:</td><td><?php echo"$r[kelas_name]" ?></td></tr>
							<tr><td><label>Tempat Program</label></td><td>:</td><td><?php echo"$r[tempat_program_name]" ?></td></tr>
							<tr><td><label>Asrama</label></td><td>:</td><td><?php echo"$r[asrama_name]" ?></td></tr>
							<!-- <tr><td style="vertical-align: top;"><label>Catatan</label></td><td style="vertical-align: top;">:</td><td><?php //echo"$r[catatan]" ?></td></tr>
							 --><tr><td><label>Date</label></td><td>:</td><td><?php echo"$r[date]"; ?></td></tr>
							<!-- <tr><td><label>Approve</label></td><td>:</td>
								<td>
								<?php 
									if($r['approve'] == 'N'){
								?>
									<input type="radio" name="aktif" class="radio" value="Y" > Yes 
									<input type="radio" name="aktif" class="radio" value="N" checked > No
								<?php } else {?>
									<input type="radio" name="aktif" class="radio" value="Y"  checked> Yes 
									<input type="radio" name="aktif" class="radio" value="N" > No
								<?php } ?>
								</td>
							</tr> -->
						</table>
						
						
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<!-- <input type="submit" value="Update" class="alt_btn"> -->
					<input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article --><br />
<!-- 		<article class="module width_full"> -->
		<!-- <header>
			<h3 class="tabs_involved">Kirim Faktur Pembelian</h3>
		</header> -->
		<?php 
		/*$orders = mysql_query("SELECT * FROM orders WHERE id_order='$r[id_order]'");
		$o=mysql_fetch_assoc($orders);
			
			//$kota = mysql_query("SELECT * FROM kota WHERE id_kota='$o[id_kota]'");
			//$k=mysql_fetch_assoc($kota);
			
		  echo "
          <form method=POST action='?module=confirmation&act=kirimemail'>
          <table>
          <tr><td>Kepada</td><td> : <input type=text name='email' size=30 value='$r[email]'></td></tr>
          <tr><td>Subjek</td><td> : <input type=text name='subjek' size=50 value='Faktur Pembelian Toko Online Alifahijab.com'></td></tr>
          <tr><td>Pesan</td><td>
		  <textarea name='pesan' style='height: 450px; width:730px' >	  
		  Dengan ini, Kami sampaikan bahwa kami telah menerima pembayaran order, dan pesanan anda telah kami kirim.
  --------------------------------------------------------------------------------------
		  Detail Pembayaran:
		  No. Order : $r[id_order]
		  Atas nama : $r[name]
		  Email : $r[email]
		  Phone : $r[phone]
		  Nomor Rekening Pengirim : $r[no_rekening] 
		  Nama Bank Pengirim : $r[nama_bank]
		  Nama Pemilik Rekening : $r[nama_rekening]
		  Total pembayaran sebesar : Rp. $r[jumlah]
		  Alamat pengiriman : $o[alamat], $o[kecamatan], $o[kota], $o[provinsi], $o[negara], $o[kodepos]
		 
		  Terima kasih telah belanja di Toko Online kami...
		  Salam kami,
  --------------------------------------------------------------------------------------
  		  </textarea></td></tr>
          <tr><td colspan=2><input type='submit' value='Kirim' class='butt' />
                            <input type='button' class='butt' value='Batal' onclick=self.history.back()></td></tr>
          </table></form>";*/
			 
			 ?>
		<!-- </article><br  -->/><!-- end of post new article -->
		
<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
		
		<?php 
		
		
		break; 
		  case "kirimemail":
		  	$emails = mysql_query("SELECT email FROM users WHERE username='admin'");
			$em=mysql_fetch_assoc($emails);

			mail($_POST['email'],$_POST['subjek'],$_POST['pesan'], $em[email]);
			echo "
				<article style='min-width:500px; float:none;' class='module width_quarter'>
				<h2>Status Email</h2>
				<p>Email telah sukses terkirim ke tujuan</p>
				<p>[ <a href=javascript:history.go(-2)>Kembali</a> ]</p>";	 		  
			
		break;
		 } ?>
		
<?php } ?>