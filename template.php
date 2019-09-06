<!DOCTYPE html>
<?php
error_reporting(0);
// Statistik user
$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user

date_default_timezone_set('Asia/Jakarta');

$tanggal = date('Y-m-d'); // Mendapatkan tanggal sekarang
$waktu   = time(); //
// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
$s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
// Kalau belum ada, simpan data user tersebut ke database
if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
}
// Jika sudah ada, update
else{
    mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}
?>
<html lang="en-US" prefix="og: http://ogp.me/ns#">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <?php
    if ($_GET['mod']=='sub-program-bimbingan') {
      ?>
        <title>
          <?php
            $title= get_one("SELECT title FROM subbimbingan WHERE id_subbimbingan='{$_GET[id]}'");
            echo $title['title'];
          ?>
          - INDONESIA COLLEGE
        </title>
      <?php
    }else{
      ?>
        <title>
          <?php
            $title=mysql_query("SELECT static_content FROM modul WHERE id_modul = 9");
        		$judul=mysql_fetch_assoc($title);
        		echo "$judul[static_content]";
          ?>
          - Lembaga Konsultan dan Bimbingan Belajar
        </title>
      <?php
    }
  ?>
  <meta name="description" content="<?php $description=mysql_query("SELECT static_content FROM modul WHERE id_modul = 10");
  			$descrip=mysql_fetch_assoc($description);
  			echo "$descrip[static_content]";?>">
  <meta name="keywords" content="<?php $keywords=mysql_query("SELECT static_content FROM modul WHERE id_modul = 11");
  			$keyword=mysql_fetch_assoc($keywords);
  			echo "$keyword[static_content]";?>">
  <meta name="author" content="Lembaga Konsultan dan Bimbingan Belajar">
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='site/wp-content/plugins/contact-form-7/includes/css/stylesd7b7.css?ver=4.3' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='site/wp-content/plugins/revslider/public/assets/css/settingsd6ea.css?ver=5.0.9' type='text/css' media='all' /> 
<style id='rs-plugin-settings-inline-css' type='text/css'>  
#rs-demo-id {}
</style>
 <link rel='stylesheet' id='simple-social-share-main-css'  href='site/wp-content/plugins/simple-social-share/css/style5b31.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='tooltipster-css-css'  href='site/wp-content/plugins/simple-social-share/css/tooltipster5b31.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='wp-pagenavi-css'  href='site/wp-content/plugins/wp-pagenavi/pagenavi-css44fd.css?ver=2.70' type='text/css' media='all' /> 


<link rel='stylesheet' id='slick-css'  href='site/wp-content/themes/sg2015/vendor/slick/slick5b31.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='site/wp-content/themes/sg2015/css/maine518.css?ver=1476088500' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='site/wp-content/themes/sg2015/css/font-awesome.min5b31.css?ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='site/wp-content/themes/sg2015/styled162.css?ver=1445923117' type='text/css' media='all' />
<link rel='stylesheet' id='glg-photobox-style-css'  href='site/wp-content/plugins/gallery-lightbox-slider/css/photobox/photoboxcc99.css?ver=1.0.0.3' type='text/css' media='' />
 
<script type='text/javascript' src='js/jquery.js'></script>  <!-- Tambahan --> 
<script type='text/javascript' src='site/wp-includes/js/jquery/jqueryc1d8.js?ver=1.11.3'></script>
<script type='text/javascript' src='site/wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='site/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.mind6ea.js?ver=5.0.9'></script>
<script type='text/javascript' src='site/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.mind6ea.js?ver=5.0.9'></script>
<script type='text/javascript' src='site/wp-content/plugins/simple-social-share/js/jquery.tooltipster5b31.js?ver=4.3.1'></script>
<script type='text/javascript' src='site/wp-content/themes/sg2015/vendor/slick/slick.min5b31.js?ver=4.3.1'></script>
<script type='text/javascript' src='site/wp-content/themes/sg2015/js/main5371.js?ver=1445843631'></script>

<script type='text/javascript' src='site/wp-content/plugins/gallery-lightbox-slider/js/jquery/photobox/jquery.photoboxcc99.js?ver=1.0.0.3'></script>


<link rel="icon" href="joimg/favicon.png" sizes="32x32" />
<link rel="icon" href="joimg/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="joimg/favicon.png">
<!-- jquery UI -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<!--end jquery UI -->
</head>

<script type="text/javascript">
var htmlobjek;
$(document).ready(function(){
  //apabila terjadi event onchange terhadap object <select id=propinsi>

  $("#bimbingan").change(function(){
    var bimbingan = $("#bimbingan").val();
    $.ajax({
        url: "ambil-program.php",
        data: "bimbingan="+bimbingan,
        cache: false,
        success: function(msg){
            $("#program").html(msg);  //show program
        }
    });
  });


  $("#bimbingan").change(function(){
    var bimbingan = $("#bimbingan").val();
    $.ajax({
        url: "ambil-kelas.php",
        data: "bimbingan="+bimbingan,
        cache: false,
        success: function(msg){
            $("#kelas").html(msg);  //show program
        }
    });
  });

  $("#bimbingan").change(function(){
    var bimbingan = $("#bimbingan").val();
    $.ajax({
        url: "ambil-asrama.php",
        data: "bimbingan="+bimbingan,
        cache: false,
        success: function(msg){
            $("#asrama").html(msg);
        }
    });
  });




});

$( function() {
    $( "#datepicker" ).datepicker({
      yearRange: '1990:2030',
      changeMonth: true,
      changeYear: true
    });
} );

</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
  if($_GET['mod']=='daftar-online'){
?>

        <link rel="stylesheet" href="data-piker/public/css/default.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="libraries/syntaxhighlighter/public/css/shCoreDefault.css">
<?php 
}else{

}
?>
 <script>
    function validasi(){
        var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
        var emailValid   = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        var nama_peserta = formulir.nama_peserta.value;
        var jenis_kelamin = formulir.jenis_kelamin.value;
        var email        = formulir.email.value;
        var tanggal_lahir        = formulir.tanggal_lahir.value;
        var tempat_lahir        = formulir.tempat_lahir.value;
        var alamat_rumah        = formulir.alamat_rumah.value;
        var no_hp_peserta        = formulir.no_hp_peserta.value;
        var asal_sekolah        = formulir.asal_sekolah.value;
        var foto_peserta        = formulir.foto_peserta.value;
        var bukti_bayar        = formulir.bukti_bayar.value;
        var nama_ortu           = formulir.nama_ortu.value;
        var pekerjaan           = formulir.pekerjaan.value;
        var no_hp_ortu          = formulir.no_hp_ortu.value;
        var bimbingan           = formulir.bimbingan.value;
        var program             = formulir.program.value;
        var kelas               = formulir.kelas.value;
        var tempat_program      = formulir.tempat_program.value;
        var asrama              = formulir.asrama.value;

        var pesan = '';
         
        if (nama_peserta == '') {
            pesan = '-Nama tidak boleh kosong\n';
        }
         
        if (nama_peserta != '' && !nama_peserta.match(namaValid)) {
            pesan += '-nama tidak valid\n';
        }
         
        if (jenis_kelamin == '') {
            pesan += '-jenis kelamin harus dipilih</style>\n';
        }
         
        if (email == '') {
            pesan += '-<style color:red;>email tidak boleh kosong</style>\n';
        }

        if (tempat_lahir == '') {
            pesan += '-tempat lahir tidak boleh kosong\n';
        }

        if (tanggal_lahir == '') {
            pesan += '-tanggal lahir tidak boleh kosong\n';
        }
        
        if (alamat_rumah == '') {
            pesan += '-alamat rumah tidak boleh kosong\n';
        }

        if (no_hp_peserta == '') {
            pesan += '-no hp peserta tidak boleh kosong\n';
        }

        if (asal_sekolah == '') {
            pesan += '-asal sekolah tidak boleh kosong\n';
        }

        if (foto_peserta == '') {
            pesan += '-foto peserta tidak boleh kosong\n';
        }

        if (bukti_bayar == '') {
            pesan += '-bukti bayar tidak boleh kosong\n';
        }

        if (nama_ortu == '') {
            pesan += '-nama orang tua tidak boleh kosong\n';
        }

        if (pekerjaan == '') {
            pesan += '-pekerjaan tidak boleh kosong\n';
        }

        if (no_hp_ortu == '') {
            pesan += '-No HP Orang Tua tidak boleh kosong\n';
        }

         if (bimbingan == '') {
            pesan += '-bimbingan tidak boleh kosong\n';
        }

         if (program == '') {
            pesan += '-program tidak boleh kosong\n';
        }

        if (kelas == '') {
            pesan += '-kelas tidak boleh kosong\n';
        }

        if (tempat_program == '') {
            pesan += '-tempat program tidak boleh kosong\n';
        }

        if (asrama == '') {
            pesan += '-asrama tidak boleh kosong\n';
        }

        if (email !=''  && !email.match(emailValid)) {
            pesan += '-alamat email tidak valid\n';
        }

         
        if (pesan != '') {
            alert('Maaf, ada kesalahan pengisian Peserta Pendaftaran Online : \n'+pesan);
            return false;
        }
    return true
    }
</script>
<body class="home blog">
<div id="fb-root"></div>

<?php
  include("well_inc/header.php");
  include("well_inc/content.php");
  include("well_inc/footer.php"); 
?>
<?php
  if($_GET['mod']=='daftar-online'){
?>
        <!-- <script type="text/javascript" src="data-piker/public-oke/javascript/jquery-1.12.0.js"></script> -->
        <!-- <script type="text/javascript" src="data-piker/public/javascript/zebra_datepicker.js"></script> -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="data-piker/public-oke/javascript/core.js"></script>
<?php
  }else{
    
  }
?>
</body>
</html>