<style type="text/css">
.cs-tb-contact tbody tr td{
    padding: 0px 3px;
}
table.cs-tb-contact{
    width: 116%;
}
.cs-form{
    width: 116% !important;
}
/* Create three equal columns that floats next to each other */
.column {
    float: left;
    /*width: 33.33%;*/
    width: 50%;
}

/* Clear floats after the columns */
.u-row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other on smaller screens (600px wide or less) */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
 <div class="o-page-wrap">
  <div class="container">
    <div class="m-page-single">
            <h1 class="page-title">Kontak</h1>
      <div class="page-content">
<?php
error_reporting(0);
if($_GET['id']=='sukses'){
  echo "<h1 style='color:blue'>Pesan Terkirim..</h1>";
}
?>
        <div class="u-row">
<div class="u-col -t-2-3">

<table class="cs-tb-contact" border='0'>
<?php
$sql_kontak="select * from kontakk order by id_kontak desc";
$result_kontak=mysql_query($sql_kontak);
while($data_kontak=mysql_fetch_assoc($result_kontak)){
?>
  <tr><td><img src="joimg/hubungikami/<?php echo $data_kontak['gambar']; ?>"></td><td><?php echo $data_kontak['alamat']; ?></td><td><?php echo $data_kontak['phone']; ?></td></tr>
<?php
}
?>
</table>
<p>Anda bisa mengirim pesan dengan cara mengisi from dibawah ini dan jawaban akan kami kirim via email.</p>
<p>Terimakasih</p>
<div role="form" class="wpcf7 cs-form" id="wpcf7-f273-p71-o1" lang="id-ID" dir="ltr">
<div class="screen-reader-response"></div>
<form action="kirim-kontak.html" method="post" class="wpcf7-form">
<div style="display: none;">
</div>
<p>* Nama<br />
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="nama" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required a-form-control" required></span> </p>
<p>* Email<br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email a-form-control" required/></span> </p>

<p>* Alamat<br />
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="alamat" value="" size="40" class="wpcf7-form-control wpcf7-text a-form-control" required/></span> </p>
<p>* Pesan<br />
    <span class="wpcf7-form-control-wrap your-message"><textarea name="pesan" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea a-form-control" required></textarea></span> </p>
<div data-sitekey="6Lehlw8TAAAAABH_6-rsjvnPAJWRLlYVxkzdy8l_" class="wpcf7-form-control g-recaptcha wpcf7-recaptcha"></div>

<p><input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit a-button -medium -blue"/></p>

<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>

<div class="u-col -t-1-3"> 
<!-- <a href="../site/wp-content/uploads/2015/10/SG-Pusat.jpg">
<img class="aligncenter size-full wp-image-286" src="../site/wp-content/uploads/2015/10/SG-Pusat.jpg" alt="Untitled-1" width="682" height="732" />
 -->
</a></div>

</div>

      </div>
    </div>
  </div>
</div>
