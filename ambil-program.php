<?php
include "josys/koneksi.php";
/*mysql_connect("localhost","root","");
mysql_select_db("revisi_bimbel");*/
$bimbingan = $_GET['bimbingan'];
//echo $bimbingan; exit;
$program = mysql_query("SELECT *
FROM
    tb_bimbingan
    INNER JOIN tb_tmp_program 
        ON (tb_bimbingan.bimbingan_id = tb_tmp_program.bimbingan_id)
    INNER JOIN tb_program 
        ON (tb_program.program_id = tb_tmp_program.program_id) WHERE tb_tmp_program.bimbingan_id='$bimbingan'");
echo "<option selected disabled>-- Pilih Program --</option>";
while($k = mysql_fetch_array($program)){

    echo "<option value=\"".$k['program_id']."\">".$k['program_name']."</option>\n";

}

?>