<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>
		<!-- TinyMCE 4.x -->
<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
  selector: 'textarea',
  height: 450,
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
		
		<?php 	$aksi="modul/mod_biaya/aksi_biaya.php";
				$about = mysql_query("SELECT * FROM modul WHERE id_modul='16'");
				$w=mysql_fetch_array($about);
				?>
		
		<article class="module width_full">
			<header><h3>Edit Biaya</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=biaya&act=update'>
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
		
<?php } ?>