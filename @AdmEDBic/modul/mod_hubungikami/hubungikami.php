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
<style>.ui-widget-header{background:none;border:none;}</style>

		<?php
		$aksi="modul/mod_hubungikami/aksi_hubungikami.php";
		switch($_GET[act]){
			default:
		?>

			<article style="max-width:660px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Hubungi Kami</h3>
				
			</header>

			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Gambar</th> 
					<th>Alamat</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$sosmed = mysql_query("SELECT * FROM hubungikami ORDER BY id_hubungikami DESC");
				while($s=mysql_fetch_array($sosmed)){
				
				?>
				<tr>  
    				<th><?php echo"$no" ?></th>
    				<td><img src="../joimg/hubungikami/<?php echo"$s[gambar]" ?>"></td> 
					<td><?php echo"$s[alamat]" ?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=hubungikami&act=edit&id=$s[id_hubungikami]";?>">
					<input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<a href="<?php echo"$aksi?module=hubungikami&act=hapus&id=$s[id_hubungikami]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a>
					
					</td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>		
		
		<article style="min-width:260px;" class="module width_quarter">
			 <header><h3>Post Hubungikami</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_hubungikami/aksi_hubungikami.php?module=hubungikami&act=insertnew'>
				<div class="module_content">
						<fieldset>
							<label>Alamat</label>
							<textarea name="alamat"></textarea>
							
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Icon Link terkait</label><br /><br />
							<input style="margin-left:10px; margin-right:-20px;" type="file" name="fupload" required>
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 40 x 40px. Type Img : JPEG
						</fieldset>
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
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
			$sosmed = mysql_query("SELECT * FROM hubungikami WHERE id_hubungikami='$_GET[id]'");
			$g=mysql_fetch_array($sosmed);
		
		?>
		
		<article class="module width_quarter">
			 <header><h3 class="tabs_involved">Edit Link Terkait</h3>
				
				<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_hubungikami/aksi_hubungikami.php?module=hubungikami&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[id_hubungikami]" ?>'>
				<div class="module_content">
						<fieldset>
							<label>alamat</label>
							<input name="alamat" type="text" value="<?php echo"$g[alamat]" ?>">
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Icon Link Terkait</label><br /><br />
							<img width="200px" style="margin-left:5px;" src="../joimg/hubungikami/<?php echo"$g[gambar]" ?>">
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Change Icon Link Terkait</label><br /><br />
							<input style="margin-left:10px; margin-right:-20px;" type="file" name="fupload">
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 40 x 40px.
						</fieldset>	
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
				</div>
			</footer>
			</form>
		</article>
		<br />
		<?php
		break; 
		 } ?>
		
<?php } ?>