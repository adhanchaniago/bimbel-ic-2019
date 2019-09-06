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
     var oTable = $('#tempatprogram').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
<style>.ui-widget-header{background:none;border:none;}</style>


		
		<?php
		$aksi="modul/mod_tempatprogram/aksi_tempatprogram.php";
		switch($_GET[act]){
			default:
		?>
		<article style="max-width:660px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Tempat Program</h3>
				
			</header>

			<table class='display' id='tempatprogram'>
			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Tempat Program</th>
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$category = mysql_query("SELECT * FROM tb_tempatprogram ORDER BY tempat_program_id DESC");
				while($s=mysql_fetch_array($category)){
				?>
				<tr>  
    				<th><?php echo"$no" ?></th>
    				<td><?php echo"$s[tempat_program_name]" ?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=tempatprogram&act=edit&id=$s[tempat_program_id]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=tempatprogram&act=hapus&id=$s[tempat_program_id]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
		<article style="min-width:260px;" class="module width_quarter">
			 <header><h3>Post Tempat Program</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_tempatprogram/aksi_tempatprogram.php?module=tempatprogram&act=insertnew'>
			
			<div class="module_content">
						<fieldset>
							<label>Tempat Program</label>
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
			$category_edit = mysql_query("SELECT * FROM tb_tempatprogram WHERE tempat_program_id='$_GET[id]'");
			//	echo $sql; exit;
				$g=mysql_fetch_array($category_edit);
		
		?>
		
		<article class="module width_quarter" style="width: 50%;">
			 <header><h3 class="tabs_involved">Edit Tempat Program</h3>
				
				<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_tempatprogram/aksi_tempatprogram.php?module=tempatprogram&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[tempat_program_id]" ?>'>
				<div class="module_content">

						<fieldset>
							<label>Tempat Program</label>
							<input name="nama" type="text" value="<?php echo"$g[tempat_program_name]" ?>">
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