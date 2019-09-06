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
		$aksi="modul/mod_4category/aksi_programcategory.php";
		switch($_GET[act]){
			default:
		?>
		
		
		<article style="max-width:660px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Category</h3>
				
			</header>

			<table class='display' id='example'>

			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Name</th>
    				<th>Actions</th> 
				</tr> 
			</thead> 

			<tbody> 
			<?php 	
				$no=1;
				$category = mysql_query("SELECT * FROM programcategory ORDER BY programcategory_id ASC");
					//echo $sql; exit;
				while($s=mysql_fetch_array($category)){
				
				?>
				<tr>  
    				<th><?php echo"$no" ?></th>
    				<td><?php echo"$s[programcategory_name]" ?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=programcategory&act=edit&id=$s[programcategory_id]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=programcategory&act=hapus&id=$s[programcategory_id]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
		<article style="min-width:260px;" class="module width_quarter">
			 <header><h3>Post Category</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_programcategory/aksi_programcategory.php?module=programcategory&act=insertnew'>
				<div class="module_content">

				<fieldset>
					<label>Nama</label>
					<select name="program">
					<?php
					$sql="select * from program";
					$result=mysql_query($sql);
					echo "<option value=''>--Pilihan--</option>";
					while($data=mysql_fetch_array($result)){
						echo "<option value='$data[program_id]'>".$data[program_name]."</option>";
					}
					?>	
					
					</select>
				</fieldset>

						<fieldset>
							<label>Nama</label>
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
			$category = mysql_query("SELECT * FROM programcategory WHERE programcategory_id='$_GET[id]'");
				$g=mysql_fetch_array($category);
		
		?>
		
		<article class="module width_quarter" style="width: 50%;">
			 <header><h3 class="tabs_involved">Edit Program</h3>
				
				<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_programcategory/aksi_programcategory.php?module=programcategory&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[programcategory_id]" ?>'>
				<div class="module_content">
						<fieldset>
							<label>Program Bimbingan</label>
							<input name="nama" type="text" value="<?php echo"$g[programcategory_name]" ?>">
						</fieldset>
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
						<div class="clear"></div>
				</div>
				<div class="module_content">
				<label>Nama Categpry Bimbingan</label>
						<fieldset>
						<select name="program">
					<?php
					$sql="select * from program";
					$result=mysql_query($sql);

					while($data=mysql_fetch_array($result)){
					if($data[program_id] == $g[program_id]){
							echo "<option value='$data[program_id]' selected>".$data[program_name]."</option>";
						}else{
							echo "<option value='$data[program_id]'>".$data[program_name]."</option>";
					}
					}
					?>	
					</select>
							
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