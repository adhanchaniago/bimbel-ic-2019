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
				"pagebreak",
				
			],

			//toolbar: "pagebreak save charmap advhr| insertfile undo redo | styleselect,formatselect,fontselect,fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages | print preview media | forecolor backcolor emoticons | anchor",
			toolbar:"pagebreak save charmap| insertfile undo redo | styleselect formatselect fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | jbimages | print preview media | forecolor backcolor emoticons | justifyleft justifycenter justifyright justifyfull | cut copy paste pastetext pasteword | search replace | blockquote |link unlink anchor image cleanup help code | insertdate inserttime preview | tablecontrols | hr removeformat visualaid | sub sup | iespell media advhr | print | ltr rtl | fullscreen | insertlayer moveforward movebackward absolute |styleprops spellchecker | cite abbr acronym del ins attribs | visualchars nonbreaking template | insertimage",
			relative_urls: false
	 });
	</script>
<!-- /TinyMCE -->
		
		<?php
		$aksi="modul/mod_portofolio/aksi_portofolio.php";
		$module="portofolio";
		switch($_GET['act']){
			default:
		?>
		
		<article class="module width_full">
			<header><h3 class="tabs_involved">Portofolio / Our Projects</h3>
				
				<input style="float:right; margin-top:5px;margin-right:15px;" type='button'  class='tombol' value='Insert New' onclick="location.href='?module=<?php echo $module;?>&act=insertnew'">
				
			</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class='display' id='example'> 
			<thead> 
				<tr>  
    				<th>No</th> 
    				<th>Portofolio Name</th> 
    				<th>Client Name</th> 
    				<th>Category</th> 
    				<th width="13%">Date</th> 
    				<th width="70px">Action</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$berita = mysql_query("SELECT * FROM portofolio ORDER BY id_portofolio DESC");
				while($b=mysql_fetch_array($berita)){
				$tanggal = tgl_indo($b['tahun']);
				
				$katt = mysql_query("SELECT * FROM categ_porto where id_categ_porto='$b[id_categ_porto]'");
				$tkatt=mysql_fetch_array($katt);
				
				?>
				<tr>  
    				<td align="center"><?php echo"$no";?></td> 
    				<td><?php echo "$b[nama]";?></td> 
    				<td><?php echo "$b[client]" ?></td> 
    				<td><?php echo $tkatt['nama']; ?></td> 
    				<td><?php echo $tanggal; ?></td> 
    				<td align="center"><a href="<?php echo"?module=$module&act=edit&id=$b[id_portofolio]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo"$aksi?module=$module&act=hapus&id=$b[id_portofolio]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a>
					
					</td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			</div><!-- end of #tab1 -->
			<div class="clear"></div>
		</div><!-- end of .tab_container -->
		</article>
		<br />
		<div class="clear"></div>
		
		<?php break; 
		case"insertnew":
		?>
		
		<article class="module width_full">
			<header><h3>Add portofolio</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=<?php echo $module;?>&act=insertnew'>
				
				<div class="module_content">
						<fieldset><label>Portofolio Name</label><br /><br />
							<input style="width:96%; margin-bottom:8px;" name="nama" type="text" placeholder="Please input portofolio name" required>
						</fieldset>
						<fieldset><label>Client Name</label><br /><br />
							<input style="width:96%; margin-bottom:8px;" name="client" type="text" placeholder="Please input client name" required>
						</fieldset>
						<fieldset><label>Month And Year</label><br /><br />
							<input style="width:96%; margin-bottom:8px; margin-left: 10px;" name="tahun" type="month" required>
						</fieldset>
						<fieldset><label>Category</label><br /><br />
							<select id='kategori' name="kategori" onchange='kat()' required>
								<?php
								$kateg = mysql_query("SELECT * FROM categ_porto ORDER BY nama");
								while($tkateg=mysql_fetch_array($kateg)){
								?>
								<option value="<?php echo $tkateg['id_categ_porto'];?>"><?php echo $tkateg['nama'];?></option>
								<?php
								}
								?>
							</select>
						</fieldset>
						<fieldset><label>Description</label><br /><br />
							<textarea name="deskripsi" id="jogmce"></textarea>
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<br /><br /><label>Thumbnail</label>
							<input style="margin-left:10px;" type="file" name="fupload[]" size="40" multiple="multiple" accept="image/*">
							<br /><br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 780 x 520px. Tipe file harus jpg/jpeg
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Publish" class="alt_btn">
					<input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><br /><br /><!-- end of post new article -->
		
		<?php break; 
		case"edit":
			$berita = mysql_query("SELECT * FROM portofolio WHERE id_portofolio='$_GET[id]'");
			$r=mysql_fetch_array($berita);
		?>
		
		<article class="module width_full">
			<header><h3>Edit portofolio</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=<?php echo $module;?>&act=update'>
				<input type='hidden' name='id' value='<?php echo"$r[id_portofolio]" ?>'>
				<div class="module_content">
						<fieldset><label>Portofolio Name</label><br /><br />
							<input style="width:96%; margin-bottom:8px;" name="nama" type="text" value="<?php echo"$r[nama]" ?>" required>
						</fieldset>
						<fieldset><label>Client Name</label><br /><br />
							<input style="width:96%; margin-bottom:8px;" name="client" type="text" value="<?php echo"$r[client]" ?>" required>
						</fieldset>
						<fieldset><label>Month And Year</label><br /><br />
							<input style="width:96%; margin-bottom:8px; margin-left: 10px;" name="tahun" type="month" value="<?php echo "$r[tahun]";?>" required>
						</fieldset>
						<fieldset><label>Kategori</label><br /><br />
							<select id='kategori' name="kategori" onchange='kat()' required>
								<?php
								//$sub = mysql_query("SELECT * FROM kategori WHERE id_kategori='$r[id_kategori]'");
								//$s=mysql_fetch_array($sub);
								$kateg = mysql_query("SELECT * FROM categ_porto order by nama");
								while($tkateg=mysql_fetch_array($kateg)){
								if($tkateg['id_categ_porto']==$r['id_categ_porto']){
								?>
								<option value="<?php echo $tkateg['id_categ_porto'];?>" selected><?php echo $tkateg['nama'];?></option>
								<?php
								}else{
								?>
								<option value="<?php echo $tkateg['id_categ_porto'];?>"><?php echo $tkateg['nama'];?></option>
								<?php
								}
								}
								?>
							</select>
						</fieldset>
						<fieldset><label>Description <?php echo $r[id_portofolio];?></label><br /><br />
							<textarea name="deskripsi" id="jogmce"><?php echo"$r[deskripsi]" ?></textarea>
						</fieldset>

					<?php 
						$portofolio_img = mysql_query("SELECT * FROM portofolio_img WHERE id_portofolio = '$r[id_portofolio]' ORDER BY id_porto_img DESC");
						while($proimg = mysql_fetch_array($portofolio_img)){
					?>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							&nbsp;&nbsp;<img width="270px" src="../joimg/portofolio/<?php echo"$proimg[gambar]" ?>">
							<br /><br /><label><a href="<?php echo"$aksi?module=$module&act=hapusgambar&id=$proimg[id_porto_img]";?>" onclick="return confirm('Apakah anda yakin menghapus gambar ini?');" class="alt_btn" style="color: red;"><b> Delete</b></a></label>
						</fieldset>
					<?php } ?>
						<hr/>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<br /><br /><label>Thumbnail</label>
							<input style="margin-left:10px;" type="file" name="fupload[]" size="40" multiple="multiple" accept="image/*">
							<br /><br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 780 x 520px. Tipe file harus jpg/jpeg
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
					<input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><br /><br /><!-- end of post new article -->
		
		
		<div class="clear"></div><br/><br/>
		
		
		
		<?php	
		break;
		 } ?>
		
<?php } ?>