<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{?>
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
		$aksi="modul/mod_download/aksi_download.php";
		switch($_GET['act']){
			default:
		?>
		<!-- comment -->
		<article class="module width_full">
			<header>
				<h3 style="width: 80%;">Upload Files</h3>
				<input type="button"  class="butt" value="Tambahkan File" onclick="location.href='?module=download&act=tambah_file'" style="margin-top: 5px;">
			</header>
			<table class='display' id='example'> 
			<thead> 
				<tr>  
    				<th>No</th>
					<th>Judul</th>
					<th>Nama File</th>
					<th>Aksi</th>
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$member = mysql_query("SELECT * FROM download ORDER BY id_download DESC");
				while($r=mysql_fetch_array($member)){
				
				
				?>
				<tr>  
    				<td align="center"><?php echo"$no" ?></td> 
    				<td align="center"><?php echo"$r[judul]" ?></td> 
    				<td align="center"><?php echo"$r[nama_file]" ?></td> 
					<td align="center"><a href="<?php echo"?module=download&act=edit_file&id=$r[id_download]";?>"><input type="image" src="images/icn_edit.png" title="Edit"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo"$aksi?module=download&act=hapus&id=$r[id_download]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
		</article>
		<!-- end of comment -->
  <?php break; 
  case "tambah_file":
    echo "<article class='module width_full'>
			<h2>TAMBAHKAN FILE</h2>
			<form method=POST action='$aksi?module=download&act=input' enctype='multipart/form-data'>
				<table>
					<tr>
						<td>Nama File</td>
						<td> : </td>
						<td><input type=text name='judul' size=30 required></td>
					</tr>
					<tr>
						<td>File</td>
						<td> : </td>
						<td><input type=file name='fupload' required> </td>
					</tr>
					<tr><td style='color: #F00;'>** File Size Max 10Mb</td></tr>
					<tr>
						<td colspan=2 style='padding: 10px;'>
						<input type=submit class=butt value=Simpan>
						<input type=button class=butt value=Batal onclick=self.history.back()></td>
					</tr>
				</table>
			</form>
		</article>";
     break;
    

    case "edit_file":
    $e_file = mysql_fetch_array(mysql_query("SELECT * FROM download WHERE id_download='$_GET[id]'"));
    echo "<article class='module width_full'>
			<h2>PERBAHARUI FILE</h2>
			<form method='POST' action='$aksi?module=download&act=update' enctype='multipart/form-data'>
				<input type='hidden' name='id' value='$e_file[id_download]'>
				<table>
					<tr>
						<td>Nama File</td>
						<td> : </td>
						<td><input type='text' name='judul' size='30' value='$e_file[judul]' required></td>
					</tr>
					<tr>
						<td>File Sekarang</td>
						<td> : </td>
						<td> $e_file[nama_file] </td>
					</tr>
					<tr>
						<td>Perbaharui File</td>
						<td> : </td>
						<td><input type='file' name='fupload'> </td>
					</tr>
					<tr><td style='color: #F00;'>** File Size Max 10Mb</td></tr>
					<tr>
						<td colspan=2 style='padding: 10px;'>
						<input type=submit class=butt value=Simpan>
						<input type=button class=butt value=Batal onclick=self.history.back()></td>
					</tr>
				</table>
			</form>
		</article>";
     break;
}
}
?>
