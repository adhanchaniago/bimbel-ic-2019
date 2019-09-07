<?php
	if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
		echo "
			<link href='style.css' rel='stylesheet' type='text/css'>
			<center>Untuk mengakses modul, Anda harus login <br>
			<a href=../../index.php><b>LOGIN</b></a></center>
		";
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
		var oTable = $('#dataTable').dataTable( {
						"bJQueryUI": true,
						"sPaginationType": "full_numbers",
					} );		
	} );
	</script>
	<style>.ui-widget-header{background:none;border:none;}</style>

			<?php
			$aksi="modul/mod_informasi_bimbel/aksi_informasi_bimbel.php";
			switch($_GET['act']){
				default:
			?>

				<article style="max-width:660px;" class="module width_3_quarter">
				<header><h3 class="tabs_involved">Informasi Bimbel</h3></header>

				<table class='display' id='dataTable'>
				<thead> 
					<tr>  
						<th>No</th>
						<th>Keterangan</th> 
						<th>Actions</th> 
					</tr> 
				</thead> 
				
				<tbody> 
				<?php 	
					$no=1;
					$rows = get_all("SELECT * FROM get_informations ORDER BY texts DESC");
					foreach ($rows as $key => $s) {				
					?>
					<tr>  
						<th><?php echo $no ?></th>
						<td><?php echo $s['texts'] ?></td> 
						<td style="text-align:center"><a href="<?php echo"?module=informasi-bimbel&act=edit&id={$s['get_information_id']}";?>">
						<input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						<a href="<?php echo"$aksi?module=informasi-bimbel&act=hapus&id={$s['get_information_id']}";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a>
						
						</td> 
					</tr> 
				<?php $no++; } ?>
					
					
				</tbody> 
				</table>
				<div class="clear"></div>
				<div class="clear"></div>
			</article>		
			
			<article style="min-width:260px;" class="module width_quarter">
				<header><h3>Post Informasi Bimbel</h3></header>
				<form method='POST' enctype='multipart/form-data' action='modul/mod_informasi_bimbel/aksi_informasi_bimbel.php?module=informasi-bimbel&act=insertnew'>	
					<div class="p-1">
						<label for="" class="d-block">keterangan :</label><br>
						<input  class="p-1 w-90" name="texts" placeholder="Dapat informasi bimbel dari ..." required="">
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
				$g= get_one("SELECT * FROM get_informations WHERE get_information_id='{$_GET["id"]}' ");
			
			?>
			
			<article class="module width_quarter">
				<header>
					<h3 class="tabs_involved">Edit Hubungi Kami</h3>
					<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				</header>
				<form method='POST' enctype='multipart/form-data' action='modul/mod_informasi_bimbel/aksi_informasi_bimbel.php?module=informasi-bimbel&act=update'>
					<input type='hidden' name='id' value='<?php echo $g['get_information_id'] ?>'>
					<div class="p-1">
						<label class="d-block">Keterangan :</label><br>
						<input value="<?php echo $g['texts'] ?>" class="p-1 w-90" name="texts" placeholder="Dapat informasi bimbel dari ..." required="">
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