
 <div class="o-page-wrap">
  <div class="container">
    <div class="m-page-single">
            <h1 class="page-title">Daftar Online</h1>
      <div class="page-content">
<?php
error_reporting(0);
if($_GET['id']=='sukses'){
  echo "<h1 style='color:blue'>Pendaftaran Sukses..</h1><p style='color:blue'>
Pendaftaran online Anda berhasil. Bukti Pendaftaran online akan dikirim via e-mail pada jam kerja (08.00-16.00). Konfirmasi Pengiriman bukti pendaftaran online silahkan hubungi 0812-2993-4434 (Ratna), Atau telp. 0274-547505.</p>
  ";
}

?>
<div class="u-row">
<div class="u-colX -t-2-3"><div role="form" class="wpcf7" id="wpcf7-f273-p71-o1" lang="id-ID" dir="ltr">
<div class="screen-reader-response"></div>
<form name="formulir" action="proses-daftar.html" method="POST" enctype="multipart/form-data" onSubmit="return validasi()">
<div style="display: none;">
</div>

<table border="0">
    <tr>
        <td>Nama Peserta</td>
        <td>:</td>
        <td><input placeholder="Masukan nama ..." type="text" name="nama_peserta" style="width: 88%;" required></td>
    </tr>

    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input placeholder="Masukan tempat lahir..." type="text" name="tempat_lahir" required></td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <!-- <td><input id="datepicker-example1" type="text" name="tanggal_lahir" required></td> -->
        <td><input id="datepicker" type="text" name="tanggal_lahir" required></td>
    </tr>

    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><select name="jenis_kelamin" required><option value="Laki-laki">Laki-Laki</option><option value="Perempuan">Perempuan</option></td>
    </tr>

    <tr>
        <td>Alamat Rumah</td>
        <td>:</td>
        <td><textarea placeholder="Masukan alamat lengkap..." name="alamat_rumah" style="width: 88%;height: 118%;" required></textarea></td>
    </tr>

    <tr>
        <td>No Hp Peserta</td>
        <td>:</td>
        <td><input placeholder="+628123456789" type="text" name="no_hp_peserta" style="width: 60%;" required></td>
    </tr>

    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input placeholder="email@gmail.com" type="email" name="email" style="width: 70%;" required></td>
    </tr>

    <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td><input placeholder="Masukan nama asal sekolah" type="text" name="asal_sekolah" style="width: 70%;" required></td>
    </tr>

    <tr>
        <td>Foto Peserta</td>
        <td>:</td>
        <td><input type="file" name="foto_peserta"  required>(type file: '*.jpg')</td>
    </tr>

    <tr>
        <td>Bukti Pembayaran</td>
        <td>:</td>
        <td><input type="file" name="bukti_bayar" required>(type file: '*.jpg')</td>
    </tr>

    <tr>
        <td>Nama Orang Tua</td>
        <td>:</td>
        <td><input placeholder="Masukan nama orang tua" type="text" name="nama_ortu" style="width: 88%;" required></td>
    </tr>

    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><input placeholder="Masukan nama pekerjaan orang tua" type="text" name="pekerjaan" style="width: 88%;" required></td>
    </tr>

    <tr>
        <td>No Hp Ortu</td>
        <td>:</td>
        <td><input placeholder="+628123456789" type="text" name="no_hp_ortu" style="width: 88%;" required></td>
    </tr>

    <tr>
        <td>Bimbingan</td><td>:</td>
        <td>
                <select name="bimbingan" id="bimbingan" required="">
                    <option value="" selected="" disabled="">- Pilih Bimbingan -</option>
                    <?php
                        //mengambil nama-nama propinsi yang ada di database
                        $rows = get_all("SELECT * FROM tb_bimbingan ORDER BY bimbingan_id DESC");
                        foreach ($rows as $key => $p) {
                        echo "<option value=\"{$p['bimbingan_id']}\">{$p['bimbingan_name']}</option>\n";
                        }
                    ?>
                </select>
        </td>
    </tr>
    
    <tr>
        <td>Program</td><td>:</td>
        <td>
                <select name="program" id="program" required="">
                    <option value="" selected="" disabled="">- Pilih Program -</option>
                </select>
        </td>
    </tr>

    <tr>
        <td>Kelas</td><td>:</td>
        <td>
                <select name="kelas" id="kelas" required="">
                    <option value="" selected="" disabled="">- Pilih Kelas -</option>
                </select>
        </td>
    </tr>
    
    <tr>
        <td>Tempat Program</td><td>:</td>
        <td>
                <select name="tempat_program" id="tempat_program" required="">
                    <option value="" selected="" disabled="">- Pilih Tempat Program -</option>
                    <?php
                    $rows= get_all("SELECT * FROM tb_tempatprogram ORDER BY tempat_program_id DESC ");
                    foreach ($rows as $key => $value) {
                        echo "<option value=\"{$value['tempat_program_id']}\">{$value['tempat_program_name']}</option>\n";
                    }
                    ?>
                </select>
        </td>
    </tr>
    
    <tr>
        <td>Asrama</td><td>:</td>
        <td>
            <select name="asrama" id="asrama" required="">
                <option value="" selected="" disabled=""> - Pilih Asrama - </option>
                   <?php
                    //mengambil nama-nama propinsi yang ada di database
                    $rows = get_all("SELECT * FROM tb_asrama ORDER BY asrama_id DESC");
                    foreach ($rows as $key => $value) {
                        echo "<option value=\"{$value['asrama_id']}\">{$value['asrama_name']}</option>\n";
                    }
                ?>
            </select>
            <!-- <span><i>*) ketersediaan asrama</i></span> -->
        </td>
    </tr>

    <tr>
        <td>Saya dapat info bimbel dari</td>
        <td>:</td>
        <td>
            <select name="get_information_id" required="">
                <?php
                    $rows= get_all("SELECT * FROM get_informations");
                    foreach ($rows as $key => $value) {
                        echo "<option value='{$value['get_information_id']}'>{$value['texts']}</option>";
                    }
                ?>
            </select>
        </td>
    </tr>
    
     <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" value="Kirim" name="submit" />
        </td>
    </tr>

</table>

<!-- <p>Nama Anda (wajib)<br />
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required a-form-control" aria-required="true" aria-invalid="false" /></span> </p>
<p>Email Anda (wajib)<br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email a-form-control" aria-required="true" aria-invalid="false" /></span> </p>
<p>Telephone / Handphone (wajib)<br />
    <span class="wpcf7-form-control-wrap TelpHP"><input type="tel" name="TelpHP" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel a-form-control" aria-required="true" aria-invalid="false" /></span></p>
<p>Subjek<br />
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text a-form-control" aria-invalid="false" /></span> </p>
<p>Pesan Anda<br />
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea a-form-control" aria-invalid="false"></textarea></span> </p>
<div data-sitekey="6Lehlw8TAAAAABH_6-rsjvnPAJWRLlYVxkzdy8l_" class="wpcf7-form-control g-recaptcha wpcf7-recaptcha"></div> -->
<!-- <p><input type="submit" value="Kirim" class="wpcf7-form-control wpcf7-submit a-button -medium -blue" /></p> -->

<div class="wpcf7-response-output wpcf7-display-none"></div>
</form></div></div>

<div class="u-col -t-1-3"> <!-- <a href="../site/wp-content/uploads/2015/10/SG-Pusat.jpg">
<img class="aligncenter size-full wp-image-286" src="../site/wp-content/uploads/2015/10/SG-Pusat.jpg" alt="Untitled-1" width="682" height="732" />
 -->
</a></div>

</div>

      </div>
    </div>
  </div>
</div>
