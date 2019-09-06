<?php
include "josys/koneksi.php";
/*mysql_connect("localhost","root","");
mysql_select_db("revisi_bimbel");*/
$bimbingan = $_GET['bimbingan'];
//echo $bimbingan; exit;
$asrama = mysql_query("SELECT *
FROM
    tb_bimbingan
    INNER JOIN tb_tmp_asrama 
        ON (tb_bimbingan.bimbingan_id = tb_tmp_asrama.bimbingan_id)
    INNER JOIN tb_asrama 
        ON (tb_asrama.asrama_id = tb_tmp_asrama.asrama_id) WHERE tb_tmp_asrama.bimbingan_id='$bimbingan'");
echo "<option>-- Pilih Asrama --</option>";
while($k = mysql_fetch_assoc($asrama)){

    echo "<option value=\"".$k['asrama_id']."\">".$k['asrama_name']."</option>\n";

}

?>