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
     var oTable = $('#example').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
		<!-- TinyMCE 4.x -->
<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
	
	<script type="text/javascript">
	tinymce.init({
			selector: "textarea",
			plugins: "table",
			tools: "inserttable",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste jbimages",
				"textcolor",
				"autoresize",
				"pagebreak"
			],

			//toolbar: "pagebreak save charmap advhr| insertfile undo redo | styleselect,formatselect,fontselect,fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages | print preview media | forecolor backcolor emoticons | anchor",
			toolbar:"pagebreak save charmap| insertfile undo redo | styleselect formatselect fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | jbimages | print preview media | forecolor backcolor emoticons | justifyleft justifycenter justifyright justifyfull | cut copy paste pastetext pasteword | search replace | blockquote |link unlink anchor image cleanup help code | insertdate inserttime preview | tablecontrols | hr removeformat visualaid | sub sup | iespell media advhr | print | ltr rtl | fullscreen | insertlayer moveforward movebackward absolute |styleprops spellchecker | cite abbr acronym del ins attribs | visualchars nonbreaking template | insertimage",
			relative_urls: false
	 });
	</script>
<!-- /TinyMCE -->
			<?php
		$aksi="modul/mod_pesan_jasa/aksi_pesan_jasa.php";
		switch($_GET[act]){
			default:
		?>

		<?php 	$aksi="modul/mod_pesan_jasa/aksi_pesan_jasa.php";
				$profil = mysql_query("SELECT * FROM modul WHERE id_modul='5'");
				$w=mysql_fetch_array($profil);
				?>
				<article class="module width_full">
			<header><h3 class="tabs_involved">Daftar Pemesanan Jasa</h3>
				
			</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>Name</th> 
    				<th>Email</th>
					<th>Telphone</th>
					<th>Waktu</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$kontak = mysql_query("SELECT * FROM pesan_jasa ORDER BY id_pesan_jasa DESC");
				while($k=mysql_fetch_array($kontak)){
				
				?>
				<tr>  
    				<td><?php echo "$k[nama]" ?></td> 
    				<td><?php echo "$k[email]" ?></td>
					<td><?php echo "$k[telphone]"?></td>
    				<td><?php echo tgl_indo(substr($k[waktu], 0,10)); echo", pukul "; echo substr($k[waktu], 11, 20);?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=pesan_jasa&act=edit&id=$k[id_pesan_jasa]";?>"><input type="image" src="images/icn_edit.png" title="Replay"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=pesan_jasa&act=hapus&id=$k[id_pesan_jasa]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			</div><!-- end of #tab1 -->
			<div class="clear"></div>
		</div><!-- end of .tab_container -->
		</article>

		<article class="module width_full">
			<header><h3>Edit pemesanan Jasa</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=pesan_jasa&act=update'>
				<input type='hidden' name='id' value='<?php echo"$w[id_modul]" ?>'>
				<div class="module_content">
							<textarea name="isi" rows="12"><?php echo"$w[static_content]" ?></textarea>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Publish" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
	<?php break; 
		case"edit":
			$kontak = mysql_query("SELECT * FROM pesan_jasa WHERE id_pesan_jasa='$_GET[id]'");
				$k=mysql_fetch_array($kontak);
		
		?>
		
		<article class="module width_full">
			<header><h3 class="tabs_involved">Detail Pemesanan Jasa</h3>
				
				<input style="float:right; margin-top:5px;margin-right:15px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
				<div class="module_content">
					
					<table>
						<tr><td width="170px" colspan="2"><h2>Identitas Diri</h2></td></tr>
						<tr><td width="170px"><h4>Nama Lengkap</h4></td><td> : <?php echo"$k[nama]" ?></td></tr>
						<tr><td width="170px"><h4>Jenis Kelamin</h4></td><td> : <?php echo"$k[jenkel]" ?></td></tr>
						<tr><td width="170px"><h4>Status Menikah</h4></td><td> : <?php echo"$k[nikah]" ?></td></tr>
						<tr><td width="170px"><h4>Email</h4></td><td> : <?php echo"$k[email]" ?></td></tr>
						<tr><td width="170px"><h4>Telphone</h4></td><td> : <?php echo"$k[telphone]" ?></td></tr>
						<tr><td width="170px"><h4>alamat Tinggal</h4></td><td> : <?php echo"$k[alamat]" ?></td></tr>
						<tr><td width="170px"><h4>Waktu</h4></td><td> : <?php echo tgl_indo(substr($k[waktu], 0,10)); echo", pukul "; echo substr($k[waktu], 11, 20);?></td></tr>
						<tr><td width="170px" colspan="2"><h2>Keterangan Pemesanan Desain</h2></td></tr>
						<tr><td width="170px"><h4>Jenis Bangunan</h4></td><td> : <?php echo"$k[jenis]" ?></td></tr>
						<tr><td width="170px"><h4>Sudah Memiliki Tanah?</h4></td><td> : <?php echo"$k[tanah]" ?></td></tr>
						<tr><td width="170px"><h4>Lokasi Tanah</h4></td><td> : <?php echo"$k[lokasi]" ?></td></tr>
						<tr><td width="170px"><h4>Luas Lahan yang diolah </h4></td><td> : <?php echo format_rupiah($k[lahan]); ?> m<sup>2</sup></td></tr>
						<tr><td width="170px"><h4>Luas Bangunan Yang Diperlukan </h4></td><td width="400px"> : <?php echo format_rupiah($k[bangunan]); ?> m<sup>2</sup></td></tr>
						<tr><td width="170px"><h4>Budget Maksimal Untuk Membangun</h4></td><td width="400px"> : Rp. <?php echo format_rupiah($k[budget]); ?> ,-</td></tr>
						<tr><td width="170px"><h4>Kebutuhan ruang dan keterangan Lengkap lainnya</h4></td><td> : <?php echo "$k[pesan]";?></td></tr>

					</table>
				</div>
		</article>
		
		<?php
		
		break; 
		 } ?>
<?php } ?>