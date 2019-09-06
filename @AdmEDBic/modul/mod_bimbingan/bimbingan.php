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
     var oTable = $('#bimbingan').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
<style>.ui-widget-header{background:none;border:none;}</style>


		
		<?php
		$aksi="modul/mod_bimbingan/aksi_bimbingan.php";
		switch($_GET[act]){
			default:
		?>
		
		
		<article style="max-width:660px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Bimbingan</h3>
				
			</header>

			<table class='display' id='bimbingan'>
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
				$category = mysql_query("SELECT * FROM tb_bimbingan ORDER BY bimbingan_id DESC");
				while($s=mysql_fetch_assoc($category)){
				?>
				<tr>  
    				<th><?php echo"$no" ?></th>
    				<td><?php echo"$s[bimbingan_name]" ?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=bimbingan&act=edit&id=$s[bimbingan_id]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=bimbingan&act=hapus&id=$s[bimbingan_id]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
		<article style="min-width:260px;" class="module width_quarter">
			 <header><h3>Post Bimbingan</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_bimbingan/aksi_bimbingan.php?module=bimbingan&act=insertnew'>
			
			<div class="module_content">
						<fieldset>
							<label>Nama</label>
							<input name="nama" type="text" required>
						</fieldset>
						<fieldset>
							<label>Program</label><br><br>
							<?php
							$program_new= get_all("SELECT * FROM tb_program ORDER BY program_id DESC");
							foreach($program_new AS $key => $value){
								
							?>
				            <input type="checkbox" name="program[]" value="<?php echo $value['program_id']; ?>">
							
							  <?php
							  echo $value['program_name']."<br>";
							}
							  ?>
						</fieldset>
						<fieldset>
							<label>Kelas</label><br><br>
							<?php
							$kelas_new= get_all("SELECT * FROM tb_kelas ORDER BY kelas_id DESC");
							foreach ($kelas_new as $key => $value) {
							?>
				            <input type="checkbox" name="kelas[]" value="<?php echo $value['kelas_id']; ?>">
							
							  <?php
							  echo $value['kelas_name']."<br>";
							}
							  ?>
						</fieldset>

						<fieldset>
							<label>Asrama</label><br><br>
							<?php
						    $asrama_new= get_all("SELECT * FROM tb_asrama ORDER BY asrama_id DESC");
							foreach($asrama_new AS $key => $value){
							?>
				            <input type="checkbox" name="asrama[]" value="<?php echo $value['asrama_id']; ?>">
							
							  <?php
							  echo $value['asrama_name']."<br>";
							}
							  ?>
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
			$g= get_one("SELECT * FROM tb_bimbingan WHERE bimbingan_id='$_GET[id]'");
		?>
		
		<article class="module width_quarter" style="width: 50%;">
			 <header><h3 class="tabs_involved">Edit Bimbingan</h3>
				
				<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_bimbingan/aksi_bimbingan.php?module=bimbingan&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[bimbingan_id]" ?>'>
				<div class="module_content">
						<fieldset>
							<label>Nama</label>
							<input name="nama" type="text" value="<?php echo"$g[bimbingan_name]" ?>">
						</fieldset>
						<fieldset>
							<label>Program</label><br><br>
							<?php
						    $sql_program="SELECT * FROM tb_program ORDER BY program_id DESC ";
							$sql_result=mysql_query($sql_program);
							while($data_program=mysql_fetch_assoc($sql_result)){
								?>
								<input type="checkbox" name="program[]" value="<?php  echo $data_program[program_id] ?>" <?php 
								
								$sql="select * from tb_tmp_program where bimbingan_id='$g[bimbingan_id]'";
								$result=mysql_query($sql);
								while ($data=mysql_fetch_assoc($result)) {
									if($data['program_id']==$data_program['program_id']){
										echo "checked";
									}else{
										echo "";
									}
								}
								 ?>>
								<?php 
									 echo $data_program['program_name']."<br>";
									}
							?>

				          
						</fieldset>
						<fieldset>
							<label>Kelas</label><br><br>
							<?php
						    $sql_kelas="SELECT * FROM tb_kelas ORDER BY kelas_id DESC ";
							$sql_result_kelas=mysql_query($sql_kelas);
							while($data_kelas=mysql_fetch_assoc($sql_result_kelas)){
								
							?>
				            <input type="checkbox" name="kelas[]" value="<?php echo $data_kelas['kelas_id']; ?>"
				            <?php 
				           	$sql="select * from tb_tmp_kelas where bimbingan_id='$g[bimbingan_id]'";
								$result=mysql_query($sql);
								while ($data=mysql_fetch_assoc($result)) {
									if($data['kelas_id']==$data_kelas['kelas_id']){
										echo "checked";
									}else{
										echo "";
									}
								}
								 ?>>
							  <?php
							  echo $data_kelas['kelas_name']."<br>";
							}
							  ?>
						</fieldset>

						<fieldset>
							<label>Asrama</label><br><br>
							<?php
						    $sql_asrama="SELECT * FROM tb_asrama ORDER BY asrama_id DESC ";
							$sql_result=mysql_query($sql_asrama);
							while($data_asrama=mysql_fetch_assoc($sql_result)){
								?>
								<input type="checkbox" name="asrama[]" value="<?php  echo $data_asrama[asrama_id] ?>" <?php 
								
								$sql="SELECT * FROM tb_tmp_asrama WHERE bimbingan_id='$g[bimbingan_id]'";
								$result=mysql_query($sql);
								while ($data=mysql_fetch_assoc($result)) {
									if($data['asrama_id']==$data_asrama['asrama_id']){
										echo "checked";
									}else{
										echo "";
									}
								}
								 ?>>
								<?php 
									 echo $data_asrama['asrama_name']."<br>";
									}
							?>

				          
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