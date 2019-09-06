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
<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
     var oTable = $('#siswalolos').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
<style>.ui-widget-header{background:none;border:none;}</style>

		<!-- TinyMCE 4.x -->
<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
  selector: 'textarea',
  height: 150,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools jbimages'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages | insertimage',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
relative_urls: false,

  // imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",

  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>
<!-- /TinyMCE -->
		
		<?php
		$aksi="modul/mod_siswalolos/aksi_siswalolos.php";
		switch($_GET[act]){
			default:
		?>
		
		<article class="module width_full">
			<header><h3 class="tabs_involved">List Of Siswa Lolos IC</h3>
				
				<input style="float:right; margin-top:5px;margin-right:15px;" type='button'  class='tombol' value='Insert New' onclick="location.href='?module=siswalolos&act=insertnew'">
				
			</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class='display' id='siswalolos'> 
			<thead> 
				<tr>  
    				<th>No</th> 
    				<th>Perguruan Tinggi</th>  
    				<th>Keterangan</th> 
					<th>Tanggal</th> 
    				<th>Aksi</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$artikel = mysql_query("SELECT *
FROM
logosiswalolos
    INNER JOIN siswalolos 
        ON (logosiswalolos.id_logosiswalolos = siswalolos.id_logosiswalolos) ORDER BY siswalolos.id_siswalolos DESC");
				while($m=mysql_fetch_array($artikel)){
				$tgl = tgl_indo($m['date']);					
				?>
				<tr>  
    				<td align="center"><?php echo"$no" ?></td> 
    				<td><?php echo $m[nama]; ?></td>td>
<!--     				<td align="center"><img width="100px" src="../joimg/articles/<?php echo"$m[image]" ?>"></td>  -->
    				<td><?php echo substr(strip_tags($m['content']), 0, 250);  ?></td> 
					<td><?php echo $tgl; ?></td> 
    				<td align="center"><a href="<?php echo"?module=siswalolos&act=edit&id=$m[id_siswalolos]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo"$aksi?module=siswalolos&act=hapus&id=$m[id_siswalolos]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
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
			<header><h3>Add New Siswa Lolos IC</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=siswalolos&act=insertnew'>
				<div class="module_content">
						<table>				
							<tr><td style="width:20%;"><label>Nama Perguruan Tinggi</label></td> <td style="width:50%; margin-bottom:8px;">

							<select name="id_logosiswalolos">
							<option> -- Pilih Perguruan Tinggi -- </option>
							<?php
							$sql="select * from logosiswalolos";
							$result=mysql_query($sql);
							while($data=mysql_fetch_array($result)){
							?>
									<option value="<?php echo $data['id_logosiswalolos'] ?>"><?php echo $data['nama']; ?></option>
							<?php
							}
							?>
							</select>
							<!-- <input style="width:68%; margin-bottom:8px;" name="nama" type="text" > -->


							</td></tr>
						</table>
						
					<!-- 	<fieldset style="float:left; width:30%; margin-right: 3%;"> 
							<label>Thumbnail</label><br /><br />
							<input style="margin-left:10px;" type="file" name="fupload" size=40>
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 780 x 480px.
						</fieldset>
						<div class="clear"></div> -->
						
						<fieldset><label>Keterangan Singkat</label><br /><br />
							<textarea name="deskripsi" style="height:150px"></textarea>
						</fieldset>
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
			$articles = mysql_query("SELECT * FROM siswalolos WHERE id_siswalolos='$_GET[id]'");
			$r=mysql_fetch_array($articles);
			
		?>
		<?php
			switch($_GET[act2]){
				default:
		?>
		
		<article class="module width_full">
			<header><h3>Edit Siswa Lolos IC</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=siswalolos&act=update'>
				<input type='hidden' name='id' value='<?php echo"$r[id_siswalolos]" ?>'>
				<div class="module_content">

							<table>				
							<tr><td style="width:20%;"><label>Nama Perguruan Tinggi</label></td> <td style="width:50%; margin-bottom:8px;">

							<select name="id_logosiswalolos">
							<option> -- Pilih Perguruan Tinggi -- </option>
							<?php
							$sql="select * from logosiswalolos ";
							$result=mysql_query($sql);
							while($data=mysql_fetch_array($result)){
								if($data['id_logosiswalolos']==$r['id_logosiswalolos']){
							?>
									<option value="<?php echo $data['id_logosiswalolos'] ?>" selected><?php echo $data['nama']; ?></option>

							<?php
								}else{
									?>
									<option value="<?php echo $data['id_logosiswalolos'] ?>"><?php echo $data['nama']; ?></option>
									<?php
								}
							}
							?>
							</select>
							<!-- <input style="width:68%; margin-bottom:8px;" name="nama" type="text" > -->


							</td></tr>
						</table>
						
					<!-- 	<fieldset style="float:left; width:30%; margin-right: 3%;"> 
							&nbsp;&nbsp;<img width="270px" src="../joimg/articles/<?php echo"$r[image]" ?>">
							<br /><br /><label>Ganti Thumbnail</label><input style="margin-left:10px;" type="file" name="fupload" size=40>
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 780 x 480px.
						</fieldset> -->

						<div class="clear"></div>
						
						<fieldset><label>Edit Keterangan Singkat</label><br /><br />
							<textarea name="deskripsi" style="height:150px"><?php echo"$r[content]" ?></textarea>
						</fieldset>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
					<input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><br /><br /><!-- end of post new article -->
		
		<?php	
			break;
			}
		break;
		 } ?>
		
<?php } ?>