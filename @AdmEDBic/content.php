<?php
include "../josys/koneksi.php";
include "../josys/library.php";
include "../josys/fungsi_combobox.php";
include "../josys/class_paging.php";
include "../josys/fungsi_indotgl.php";
include "../josys/fungsi_rupiah.php";
include "../josys/helper.php";

// Bagian Home
if ($_GET['module']=='home'){
	if ($_SESSION['leveluser']=='admin'){ ?>
	<h4 class="alert_info">Selamat Datang, di bimbel-ic.com Pada "Admin Panel".</h4>
		
	<article class="module width_full">
		<header><h3>Stats</h3></header>
		<div class="module_content">
			
			<?php
				error_reporting(0);
				  // Statistik user
				  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
				  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
				  $waktu   = time(); // 

				  // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
				  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
				  // Kalau belum ada, simpan data user tersebut ke database
				  if(mysql_num_rows($s) == 0){
				  } 
				  else{
				  }

				  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
				  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
				  $hits             = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik WHERE tanggal='$tanggal'"), 0); 
				  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
				  $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
				  $bataswaktu       = time() - 300;
				  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));

				  $path = "joinc/counter/";
				  $ext = ".png";

				  $tothitsgbr = sprintf("%06d", $tothitsgbr);
				  for ( $i = 0; $i <= 9; $i++ ){
					   $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
				  }

				?>
			
			
			<article class="stats_overview">
				<div class="overview_today">
					<p class="overview_day">Today</p>
					<p class="overview_count"><?php echo"$pengunjung"; ?></p>
					<p class="overview_type">Visits</p>
					<p class="overview_count"><?php echo"$hits"; ?></p>
					<p class="overview_type">Views</p>
				</div>
				<div class="overview_previous">
					<p class="overview_day">All Time</p>
					<p class="overview_count"><?php echo"$totalpengunjung"; ?></p>
					<p class="overview_type">Visits</p>
					<p class="overview_count"><?php echo"$totalhits"; ?></p>
					<p class="overview_type">Views</p>
				</div>
			</article>
			<div class="clear"></div>
		</div>
	</article><!-- end of stats article --><?php
  }
}

//=========================== Main Menu ====================================\\
// Bagian Home
elseif ($_GET['module']=='alumni'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_alumni/alumni.php";
   // echo "Hello";
  }
}

// Bagian Home
elseif ($_GET['module']=='logosiswalolos'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_logosiswalolos/logosiswalolos.php";
   // echo "Hello";
  }
}

// Bagian Link Terkait
elseif ($_GET['module']=='running'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_running/running.php";
   // echo "Hello";
  }
}
// Bagian Link Terkait
elseif ($_GET['module']=='siswalolos'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_siswalolos/siswalolos.php";
   // echo "Hello";
  }
}

// Bagian Link Terkait
elseif ($_GET['module']=='linkterkait'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_linkterkait/linkterkait.php";
   // echo "Hello";
  }
}

// Bagian Home
elseif ($_GET['module']=='welcome'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_home/home.php";
  }
}

// Bagian Home
elseif ($_GET['module']=='cabanglain'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_cabanglain/cabanglain.php";
  }
}

// Bagian about
elseif ($_GET['module']=='about'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_about/about.php";
  }
}

elseif ($_GET['module']=='kontak'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kontak/kontak.php";
  }
}
/// 
elseif ($_GET['module']=='keunggulan'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_keunggulan/keunggulan.php";
  }
}

elseif ($_GET['module']=='subbimbingan'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_subbimbingan/subbimbingan.php";
  }
}
//
elseif ($_GET['module']=='visimisi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_visimisi/visimisi.php";
  }
}


elseif ($_GET['module']=='jadwal'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_jadwal/jadwal.php";
  }
}

elseif ($_GET['module']=='biaya'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_biaya/biaya.php";
  }
}

elseif ($_GET['module']=='carapendaftaran'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_carapendaftaran/carapendaftaran.php";
  }
}

///
elseif ($_GET['module']=='program'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_program/program.php";
  }
}

///
elseif ($_GET['module']=='programcategory'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_programcategory/programcategory.php";
  }
}

elseif ($_GET['module']=='hubungikami'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_hubungikami/hubungikami.php";
  }
}
//MENU PROGRAM START
elseif ($_GET['module']=='bimbingan'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_bimbingan/bimbingan.php";
  }
}
elseif ($_GET['module']=='tbprogram'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_tbprogram/tbprogram.php";
  }
}

elseif ($_GET['module']=='kelas'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kelas/kelas.php";
  }
}
elseif ($_GET['module']=='tempatprogram'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_tempatprogram/tempatprogram.php";
  }
}
elseif ($_GET['module']=='asrama'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_asrama/asrama.php";
  }
}
elseif ($_GET['module']=='informasi-bimbel'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_informasi_bimbel/informasi_bimbel.php";
  }
}
//MENU PROGRAM END 

// Bagian konsultasi
elseif ($_GET['module']=='konsultasi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_konsultasi/konsultasi.php";
  }
}

// Bagian Pemesanan Jasa
elseif ($_GET['module']=='pesan_jasa'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_pesan_jasa/pesan_jasa.php";
  }
}

// Bagian hotline
elseif ($_GET['module']=='hotline'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_hotline/hotline.php";
  }
}

// Bagian faqs
elseif ($_GET['module']=='faqs'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_faqs/faqs.php";
  }
}

// Bagian contact
elseif ($_GET['module']=='contact'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_contact/contact.php";
  }
}

// Bagian syarat dan kententuan
elseif ($_GET['module']=='syarat_kententuan'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_syarat_kententuan/syarat_kententuan.php";
  }
}

//=========================== Menu Product ====================================\\
// Bagian product
elseif ($_GET['module']=='product'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_product/product.php";
  }
}

// Bagian Category
elseif ($_GET['module']=='category'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_category/category.php";
  }
}

// Bagian Category Portofolio
elseif ($_GET['module']=='categ_porto'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_categ_porto/categ_porto.php";
  }
}

// Bagian Portofolio
elseif ($_GET['module']=='portofolio'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_portofolio/portofolio.php";
  }
}

// Bagian Order Produk
elseif ($_GET['module']=='orders'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_order/order.php";
  }
}

// Bagian payment confirmation
elseif ($_GET['module']=='confirmation'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_confirmation/confirmation.php";
  }
}

//=========================== Menu Support ====================================\\
// Bagian articles
elseif ($_GET['module']=='articles'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_articles/articles.php";
  }
}

// Bagian galeri foto
elseif ($_GET['module']=='album'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_album/album.php";
  }
}

// Bagian galeri foto
elseif ($_GET['module']=='galeri'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_galeri/galeri.php";
  }
}

// Bagian Galeri video
elseif ($_GET['module']=='video'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_video/video.php";
  }
}

// Bagian upload file / download
elseif ($_GET['module']=='download'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_download/download.php";
  }
}

// Bagian map
elseif ($_GET['module']=='map'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_map/map.php";
  }
}

// Bagian Slideshow
elseif ($_GET['module']=='slideshow'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_slideshow/slideshow.php";
  }
}

// Bagian Testimoni
elseif ($_GET['module']=='testimoni'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_testimoni/testimoni.php";
  }
}

// Bagian Social Media
elseif ($_GET['module']=='sosmed'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_sosmed/sosmed.php";
  }
}

// Bagian subscribe
elseif ($_GET['module']=='subscribe'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_subscribe/subscribe.php";
  }
}

// Bagian Banner
elseif ($_GET['module']=='banner'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_banner/banner.php";
  }
}

//=========================== Menu Web ====================================\\
// Bagian Title
elseif ($_GET['module']=='title'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_title/title.php";
  }
}

// Bagian Description
elseif ($_GET['module']=='description'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_description/description.php";
  }
}

// Bagian Keyword
elseif ($_GET['module']=='keyword'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_keyword/keyword.php";
  }
}

//=========================== Menu Admin ====================================\\
// Bagian User
elseif ($_GET['module']=='user'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_user/user.php";
  }
}

// Bagian Email User
elseif ($_GET['module']=='useremail'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_useremail/useremail.php";
  }
}

// Apabila modul tidak ditemukan
else{
  echo "<p><b><center>MODUL BELUM ADA ATAU BELUM LENGKAP</center></b></p>";
}
?>
