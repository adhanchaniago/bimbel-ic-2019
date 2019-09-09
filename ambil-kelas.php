<?php
include "josys/koneksi.php";
$bimbingan = $_GET['bimbingan'];
//echo $bimbingan; exit;
$program = mysql_query("SELECT *
FROM
    tb_bimbingan
    INNER JOIN tb_tmp_kelas 
        ON (tb_bimbingan.bimbingan_id = tb_tmp_kelas.bimbingan_id)
    INNER JOIN tb_kelas 
        ON (tb_kelas.kelas_id = tb_tmp_kelas.kelas_id) WHERE tb_tmp_kelas.bimbingan_id='$bimbingan'");
echo "<option selected disabled>-- Pilih Kelas --</option>";
while($k = mysql_fetch_array($program)){
    echo "<option value=\"".$k['kelas_id']."\">".$k['kelas_name']."</option>\n";
}
?>
