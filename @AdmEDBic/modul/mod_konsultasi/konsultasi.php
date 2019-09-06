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
		$aksi="modul/mod_konsultasi/aksi_konsultasi.php";
		switch($_GET[act]){
			default:
		?>

		<?php 	$aksi="modul/mod_konsultasi/aksi_konsultasi.php";
				$profil = mysql_query("SELECT * FROM modul WHERE id_modul='3'");
				$w=mysql_fetch_array($profil);
				?>
				<article class="module width_full">
			<header><h3 class="tabs_involved">Pesan Konsultasi</h3>
				
			</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>Name</th> 
    				<th>Email</th>
					<th>Pesan</th>
					<th>Waktu</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$kontak = mysql_query("SELECT * FROM konsultasi ORDER BY id_konsultasi DESC");
				while($k=mysql_fetch_array($kontak)){
				
				?>
				<tr>  
    				<td><?php echo"$k[nama]" ?></td> 
    				<td><?php echo"$k[email]" ?></td>
					<td><?php echo substr($k[pesan], 0, 50);echo "...";?></td>
    				<td><?php echo tgl_indo(substr($k[waktu], 0,10)); echo", pukul "; echo substr($k[waktu], 11, 20);?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=konsultasi&act=edit&id=$k[id_konsultasi]";?>"><input type="image" src="images/icn_edit.png" title="Replay"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=konsultasi&act=hapus&id=$k[id_konsultasi]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
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
			<header><h3>Edit Konsultasi</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=konsultasi&act=update'>
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
			$kontak = mysql_query("SELECT * FROM konsultasi WHERE id_konsultasi='$_GET[id]'");
				$k=mysql_fetch_array($kontak);
		
		?>
		
		<article class="module width_full">
			<header><h3 class="tabs_involved">Detail Pesan Konsultasi</h3>
				
				<input style="float:right; margin-top:5px;margin-right:15px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
				<div class="module_content">
					
					<table>
						<tr><td width="120px"><h4>Nama</h4></td><td> : <?php echo"$k[nama]" ?></td></tr>
						<tr><td width="120px"><h4>Email</h4></td><td> : <?php echo"$k[email]" ?></td></tr>
						<tr><td width="120px"><h4>Telphone</h4></td><td> : <?php echo"$k[telphone]" ?></td></tr>
						<tr><td width="120px"><h4>Subyek</h4></td><td> : <?php echo"$k[subyek]" ?></td></tr>
						<tr><td width="120px"><h4>Pesan Konsultasi</h4></td><td width="400px"> : <?php echo"$k[pesan]" ?></td></tr>
						<tr><td width="120px"><h4>Waktu</h4></td><td> : <?php echo tgl_indo(substr($k[waktu], 0,10)); echo", pukul "; echo substr($k[waktu], 11, 20);?></td></tr>
					</table>
				
				</div>
		</article>
		
		
		
		<?php
		
		break; 
		 } ?>
<?php } ?>