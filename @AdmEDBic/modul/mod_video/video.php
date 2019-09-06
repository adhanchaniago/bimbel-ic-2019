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
     var oTable = $('#video').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
<style>.ui-widget-header{background:none;border:none;}</style>


		
		<?php
		$aksi="modul/mod_video/aksi_video.php";
		switch($_GET['act']){
			default:
		?>
		
		<article style="min-width:535px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Koleksi video</h3>
				
			</header>

			<table class='display' id='video'>
			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Tittle</th> 
    				<th>Link</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$slide = mysql_query("SELECT * FROM video ORDER BY id DESC");
				while($s=mysql_fetch_assoc($slide)){
				
				?>
				<tr style="background: #E2E4FF;">  
    				<th><?php echo"$no" ?></th>
    				<td><?php echo"$s[judul]" ?></td> 
    				<td><?php echo"$s[video]" ?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=video&act=edit&id=$s[id]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=video&act=hapus&id=$s[id]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
		<article style="min-width:350px;width:90%;" class="module width_quarter">
			 <header><h3>Add New video</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_video/aksi_video.php?module=video&act=insertnew'>
				<div class="module_content">
						<fieldset style="width:100%;float:left;">
							<label>Title</label>
							<input name="name" type="text" style="width:97%" required>
						</fieldset>
						<fieldset style="width:100%;float:right;">
							<label>Link</label>
							<input name="link" type="text" style="width:97%" required>
							<span>*)Link harus mengunakan <b><i>www.youtube.com</i></b></span>
							<span>(contoh : <b><i>www.youtube.com/embed/WlSTAYVTxkQ</i></b>)</span>
						</fieldset>
						<fieldset style="width:100%;float:left;">
							<label>Asal Sekolah</label>
							<input name="asal_sekolah" type="text" style="width:97%" required>
						</fieldset>
						<fieldset style="width:100%;float:right;">
							<label>Diterima</label>
							<input name="diterima" type="text" style="width:97%" required>
						</fieldset>
						<fieldset style="width:100%;">
							<label>Deskripsi Singkat</label>
							<textarea name="deskripsi" type="text" style="width:95%;float:right;" rows="3" maxlength="250" required></textarea>
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) <b><i>Max. 250 Character</i></b>)
						</fieldset>
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
			$video = mysql_query("SELECT * FROM video WHERE id='$_GET[id]'");
				$g=mysql_fetch_assoc($video);
		
		?>
		
		<article style="min-width:350px;width:90%;" class="module width_quarter">
			 <header><h3 class="tabs_involved">Edit video</h3>
				
				<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_video/aksi_video.php?module=video&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[id]" ?>'>
				<div class="module_content">
						<fieldset style="width:100%;float:left;">
							<label>Title</label>
							<input name="name" type="text" style="width:97%" value="<?php echo"$g[judul]" ?>">
						</fieldset>
						<fieldset style="width:100%;float:right;">
							<label>Link</label>
							<input name="link" type="text" style="width:97%" value="<?php echo"$g[video]" ?>">
							<br><br><br><br>
							<span>*)Link harus mengunakan <b><i>www.youtube.com</i></b></span>
							<span>(contoh : <b><i>www.youtube.com/embed/WlSTAYVTxkQ</i></b>)</span>
						</fieldset>
						<fieldset style="width:100%;float:left;">
							<label>Asal Sekolah</label>
							<input name="asal_sekolah" type="text" style="width:97%" value="<?php echo"$g[asal_sekolah]" ?>">
						</fieldset>
						<fieldset style="width:100%;float:right;">
							<label>Diterima</label>
							<input name="diterima" type="text" style="width:97%" value="<?php echo"$g[diterima]" ?>">
						</fieldset>
						<fieldset style="width:100%;">
							<label>Deskripsi Singkat</label>
							<textarea name="deskripsi" type="text" style="width:95%;float:right;" rows="3" maxlength="250"><?php echo"$g[deskripsi]" ?></textarea>
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) <b><i>Max. 250 Character</i></b>)
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		<br />
		
		<?php
		
		break; 
		 } ?>
		
<?php } ?>