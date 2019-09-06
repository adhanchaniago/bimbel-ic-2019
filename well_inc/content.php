<?php
if($_GET['mod']=='home'){
//	echo "Test";
//include("well_inc/slider.php");
	include("well_cont/home.php");

}elseif($_GET['mod'] == 'profil'){

	include("well_cont/profil.php");

}elseif($_GET['mod'] == 'siswalolos-detail'){

	include("well_cont/siswalolos-detail.php");

}elseif($_GET['mod'] == 'keunggulan'){

	include("well_cont/keunggulan.php");

}elseif($_GET['mod'] == 'visi-dan-misi'){

	include "well_cont/visi-dan-misi.php";
// Program BIMBINGAN
}elseif($_GET['mod'] == 'program-bimbingan'){

	include "well_cont/program bimbingan.php";
//PORGRAM BIMBINGAN
}elseif($_GET['mod'] == 'jadwal'){

	include "well_cont/jadwal.php";

}elseif($_GET['mod'] == 'biaya'){

	include "well_cont/biaya.php";

}elseif($_GET['mod'] == 'cara-pendaftaran'){

	include "well_cont/pendaftaran.php";

}elseif($_GET['mod'] == 'kontak'){

	include "well_cont/kontak.php";

}elseif($_GET['mod'] == 'daftar-online'){

	include "well_cont/daftar-online.php";

}elseif($_GET['mod'] == 'daftar-online-sukses'){

	include "well_cont/daftar-online-sukses.php";

}elseif($_GET['mod'] == 'proses-daftar'){

	include "well_cont/proses-daftar.php";

}elseif($_GET['mod'] == 'sub-program-bimbingan'){

	include "well_cont/program-bimbingan.php";

}elseif($_GET['mod'] == 'kirim-kontak'){

	include "well_cont/proses-kontak.php";

}elseif($_GET['mod'] == 'blog'){

	include "well_cont/blog.php";

}elseif($_GET['mod'] == 'alumni'){

	include "well_cont/alumni.php";

}elseif($_GET['mod'] == 'testimoni'){

	include "well_cont/testimoni.php";

}elseif($_GET['mod'] == 'gallery'){

	include "well_cont/gallery.php";

}elseif($_GET['mod'] == 'cabanglain'){

	include "well_cont/cabanglainnya.php";

}elseif($_GET['mod'] == 'video'){

	include "well_cont/video.php";

}
