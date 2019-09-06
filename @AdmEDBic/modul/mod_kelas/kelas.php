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
     var oTable = $('#kelas').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
<style>.ui-widget-header{background:none;border:none;}</style>


		
		<?php
		$aksi="modul/mod_kelas/aksi_kelas.php";
		switch($_GET[act]){
			default:
		?>
		
		
		<article style="max-width:660px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Kelas</h3>
			</header>
			<table class='display' id='kelas'>
			<thead> 
				<tr>  
    				<th>No</th>
    				
    				<th>Kelas</th>
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php 	
				$no=1;
				$category = mysql_query("SELECT * FROM tb_kelas ORDER BY kelas_id DESC");
				while($s=mysql_fetch_array($category)){
				?>
				<tr>  
    				<th><?php echo"$no" ?></th>
    				<td><?php echo"$s[kelas_name]" ?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=kelas&act=edit&id=$s[kelas_id]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=kelas&act=hapus&id=$s[kelas_id]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
		<article style="min-width:260px;" class="module width_quarter">
			 <header><h3>Post Kelas</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_kelas/aksi_kelas.php?module=kelas&act=insertnew'>
			<div class="module_content">
						<fieldset>
							<label>Kelas</label>
							<input name="nama" type="text" required>
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
			$category = mysql_query("SELECT * FROM tb_kelas WHERE kelas_id='$_GET[id]'");
				$g=mysql_fetch_array($category);
		
		?>
		
		<article class="module width_quarter" style="width: 50%;">
			 <header><h3 class="tabs_involved">Edit Kelas</h3>
		<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_kelas/aksi_kelas.php?module=kelas&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[kelas_id]" ?>'>
				<div class="module_content">
						<fieldset>
							<label>Kelas</label>
							<input name="nama" type="text" value="<?php echo"$g[kelas_name]" ?>">
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
		</article><!-- end of post new article -->
		<br />
		
		<?php
		
		break; 
		 } ?>
		
<?php } ?>