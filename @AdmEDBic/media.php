<?php
session_start();
error_reporting(0);
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='css/screen.css' rel='stylesheet' type='text/css'><link href='css/reset.css' rel='stylesheet' type='text/css'>
 <center>Anda harus login dulu <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard Admin Panel</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="shortcut icon" type="image/x-icon" href="../joimg/favicon.png" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="?module=home">Admin Pages</a></h1>
			<h2 class="section_title">
			<?php if ($_GET['module']=='home') {?>
			Dashboard
			<!-- Main Menu -->
			<?php } elseif ($_GET['module']=='welcome'){?>
			Edit Home
			<?php } elseif ($_GET['module']=='about'){?>
			Edit About Us
			<?php } elseif ($_GET['module']=='konsultasi'){?>
			Edit Konsultasi
			<?php } elseif ($_GET['module']=='pesan_jasa'){?>
			Edit Pemesanan Jasa
			<?php } elseif ($_GET['module']=='faqs'){?>
			Edit FAQ
			<?php } elseif ($_GET['module']=='tos'){?>
			Edit Join Reseller
			<?php } elseif ($_GET['module']=='contact'){?>
			Edit Contact
			<?php } elseif ($_GET['module']=='syarat_kententuan'){?>
			Edit Syarat dan Ketentuan
			<?php } elseif ($_GET['module']=='hotline'){?>
			Edit Hotline

			<!-- Menu Product -->			
			<?php } elseif ($_GET['module']=='product'){?>
			Product
			<?php } elseif ($_GET['module']=='category'){?>
			Category Product
			<?php } elseif ($_GET['module']=='portofolio'){?>
			Portofolio
			<?php } elseif ($_GET['module']=='categ_porto'){?>
			Category Portofolio
			<?php } elseif ($_GET['module']=='orders'){?>
			Order Product
			<?php } elseif ($_GET['module']=='confirmation'){?>
			Daftar Online

			<!-- Menu Support -->
			<?php } elseif ($_GET['module']=='articles'){?>
			Articles
			<?php } elseif ($_GET['module']=='galeri'){?>
			Galeri Foto 
			<?php } elseif ($_GET['module']=='video'){?>
			Galeri Video 
			<?php } elseif ($_GET['module']=='download'){?>
			Upload Files
			<?php } elseif ($_GET['module']=='map'){?>
			Edit Maps
			<?php } elseif ($_GET['module']=='slideshow'){?>
			Slideshow
			<?php } elseif ($_GET['module']=='testimoni'){?>
			Testimoni
			<?php } elseif ($_GET['module']=='sosmed'){?>
			Social Media
			<?php } elseif ($_GET['module']=='subscribe'){?>
			Subscribe
			<?php } elseif ($_GET['module']=='banner'){?>
			Partner 

			<!-- Menu Web -->
			<?php } elseif ($_GET['module']=='title'){?>
			Edit Title Website
			<?php } elseif ($_GET['module']=='description'){?>
			Edit Description Website
			<?php } elseif ($_GET['module']=='keyword'){?>
			Edit Keyword Website

			<!-- Menu Admin -->
			<?php } elseif ($_GET['module']=='user'){?>
			Change Password
			<?php } elseif ($_GET['module']=='useremail'){?>
			Change Email
			<?php } ?>
			</h2><div class="btn_view_site"><a target="_blank" href="../">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="?module=home">Admin</a> <div class="breadcrumb_divider"></div> <a class="current">
			<?php if ($_GET['module']=='home') {?>
			Dashboard
			<!-- Main Menu -->
			<?php } elseif ($_GET['module']=='welcome'){?>
			Edit Home
			<?php } elseif ($_GET['module']=='about'){?>
			Edit About Us
			<?php } elseif ($_GET['module']=='konsultasi'){?>
			Edit Konsultasi
			<?php } elseif ($_GET['module']=='pesan_jasa'){?>
			Edit Pemesanan Jasa
			<?php } elseif ($_GET['module']=='faqs'){?>
			Edit FAQ
			<?php } elseif ($_GET['module']=='tos'){?>
			Edit Join Reseller
			<?php } elseif ($_GET['module']=='contact'){?>
			Edit Contact
			<?php } elseif ($_GET['module']=='syarat_kententuan'){?>
			Edit Syarat dan Ketentuan
			<?php } elseif ($_GET['module']=='hotline'){?>
			Edit Hotline

			<!-- Menu Product -->
			<?php } elseif ($_GET['module']=='product'){?>
			Product
			<?php } elseif ($_GET['module']=='category'){?>
			Category Product
			<?php } elseif ($_GET['module']=='portofolio'){?>
			Portofolio
			<?php } elseif ($_GET['module']=='categ_porto'){?>
			Category Portofolio
			<?php } elseif ($_GET['module']=='orders'){?>
			Order Product
			<?php } elseif ($_GET['module']=='confirmation'){?>
			Payment Confirmation
			
			<!-- Menu Support -->
			<?php } elseif ($_GET['module']=='articles'){?>
			Articles 
			<?php } elseif ($_GET['module']=='galeri'){?>
			Galeri Foto 
			<?php } elseif ($_GET['module']=='video'){?>
			Galeri Video 
			<?php } elseif ($_GET['module']=='download'){?>
			Upload Files
			<?php } elseif ($_GET['module']=='map'){?>
			Edit Maps
			<?php } elseif ($_GET['module']=='slideshow'){?>
			Slideshow
			<?php } elseif ($_GET['module']=='testimoni'){?>
			Testimoni
			<?php } elseif ($_GET['module']=='sosmed'){?>
			Social Media
			<?php } elseif ($_GET['module']=='subscribe'){?>
			Subscribe
			<?php } elseif ($_GET['module']=='banner'){?>
			Partner 

			<!-- Menu Web -->
			<?php } elseif ($_GET['module']=='title'){?>
			Edit Title Website
			<?php } elseif ($_GET['module']=='description'){?>
			Edit Description Website
			<?php } elseif ($_GET['module']=='keyword'){?>
			Edit Keyword Website

			<!-- Menu Admin -->
			<?php } elseif ($_GET['module']=='user'){?>
			Change Password
			<?php } elseif ($_GET['module']=='useremail'){?>
			Change Email
			<?php } ?>
			</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<!-- <form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/> -->

		<h3>Main Menu</h3>
			<ul class="toggle">
				<!-- <li class="icn_categories"><a href="?module=welcome">Beranda</a></li> -->
				<li class="icn_categories"><a href="?module=about">Profil</a></li>
				<li class="icn_categories"><a href="?module=keunggulan">Keunggulan</a></li>
				<li class="icn_categories"><a href="?module=visimisi">Visi dan Misi</a></li>
				<li class="icn_categories"><a href="?module=jadwal">Jadwal</a></li>
				<li class="icn_categories"><a href="?module=biaya">Biaya</a></li>
				<li class="icn_categories"><a href="?module=carapendaftaran">Cara Pendaftaran</a></li>
				<li class="icn_categories"><a href="?module=program">Program Bimbingan</a></li>

				<!-- <li class="icn_photo"><a href="?module=subbimbingan">Sum Bimbingan</a></li> -->

				
				<li class="icn_categories"><a href="?module=subbimbingan">Sub Program Bimbingan</a></li>
				<li class="icn_categories"><a href="?module=contact">Pesan</a></li>
				<li class="icn_categories"><a href="?module=kontak">Kontak</a></li>
				<li class="icn_categories"><a href="?module=hubungikami">Hubungi Kami</a></li>
				<li class="icn_categories"><a href="?module=cabanglain">Cabang Lainnya</a></li>
				<!--
				<li class="icn_categories"><a href="?module=tos">Join Reseller</a></li>
				<li class="icn_categories"><a href="?module=faqs">FAQ</a></li>
				<li class="icn_categories"><a href="?module=syarat_kententuan">Syarat dan Ketentuan</a></li>
				<li class="icn_categories"><a href="?module=konsultasi">Konsultasi</a></li>
				<li class="icn_categories"><a href="?module=pesan_jasa">Pemesanan Jasa</a></li> -->
				<!--<li class="icn_categories"><a href="?module=hotline">Hotline Service</a></li> -->
			</ul>

			<h3>Menu Program</h3>
			<ul class="toggle">
				<li class="icn_categories"><a href="?module=confirmation">Daftar Online</a></li>
				<li class="icn_categories"><a href="?module=bimbingan">Bimbingan</a></li>
				<li class="icn_categories"><a href="?module=tbprogram">Program</a></li>
				
				<li class="icn_categories"><a href="?module=kelas">Kelas</a></li>
				
				<li class="icn_categories"><a href="?module=tempatprogram">Tempat Program</a></li>
				<li class="icn_categories"><a href="?module=asrama">Asrama</a></li>
			</ul> 
			<!--
		<h3>Menu Product</h3>
			<ul class="toggle">
				<li class="icn_categories"><a href="?module=product">Produk</a></li>
				<li class="icn_categories"><a href="?module=category">Kategori Produk</a></li>
				
				<li class="icn_categories"><a href="?module=scent">Scent</a></li>
				
				<li class="icn_categories"><a href="?module=portofolio">Portofolio</a></li>
				<li class="icn_categories"><a href="?module=categ_porto">Kategori Portofolio</a></li>
				
				<li class="icn_categories"><a href="?module=orders">Pemesanan Produk</a></li>
				<li class="icn_categories"><a href="?module=confirmation">Konfirmasi Pembayaran</a></li>
				
			</ul> -->
		<h3>Menu Support</h3>
			<ul class="toggle">
			<!--
				<li class="icn_photo"><a href="?module=artikel">Kategori Artikel</a></li>
				<li class="icn_photo"><a href="?module=artikelterkait">Artikel Terkait</a></li>
				<li class="icn_photo"><a href="?module=album">Album Foto</a></li>
				-->	
				<li class="icn_photo"><a href="?module=linkterkait">Link Terkait</a></li>
				<li class="icn_photo"><a href="?module=logosiswalolos">Logo Siswa IC Lolos PT</a></li>
				<li class="icn_photo"><a href="?module=siswalolos">Siswa Lolos PT</a></li>
				<li class="icn_photo"><a href="?module=alumni">Alumni</a></li>
				<li class="icn_photo"><a href="?module=articles">Info Penting</a></li>
				<li class="icn_photo"><a href="?module=album">Galeri</a></li>
				<!--<li class="icn_photo"><a href="?module=galeri">Galeri</a></li> -->
				<li class="icn_photo"><a href="?module=video">Video</a></li>
     <!--			<li class="icn_photo"><a href="?module=download">Upload Files</a></li> 
				<li class="icn_photo"><a href="?module=map">Map</a></li> -->
				<li class="icn_photo"><a href="?module=slideshow">Slideshow</a></li>
				<li class="icn_photo"><a href="?module=testimoni">Testimoni</a></li>
				<!-- <li class="icn_photo"><a href="?module=sosmed">Sosial Media </a></li> -->
				<!--<li class="icn_photo"><a href="?module=subscribe">Subscribe</a></li> -->
				<!--<li class="icn_photo"><a href="?module=banner">Partner</a></li> -->
			</ul>
		<h3>Menu Web</h3>
			<ul class="toggle">
			<li class="icn_settings"><a href="?module=running">Running Text</a></li>
				<li class="icn_settings"><a href="?module=title">Title</a></li>
				<li class="icn_settings"><a href="?module=description">Description</a></li>
				<li class="icn_settings"><a href="?module=keyword">Keyword</a></li>
			</ul>
		<h3>Admin</h3>
			<ul class="toggle">
				<li class="icn_profile"><a href="?module=user">Change Password</a></li>
				<li class="icn_profile"><a href="?module=useremail">Change Email</a></li>
				<li class="icn_jump_back"><a href="logout.php">Logout</a></li>
			</ul>
		
		<footer>
			<hr />
			<p style="margin-bottom:10px;"><strong>Copyright &copy; 2015 <a target="_blank" href="../">bimbel-ic.com </a></strong></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<?php include('content.php'); ?>

	</section>

</body>

</html>
<?php
}
?>