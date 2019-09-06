<?php
mysql_connect("localhost","root","");
mysql_select_db("db_bimbel");
$bimbingan = $_GET['kelas'];
//echo $bimbingan; exit;
$program = mysql_query("SELECT kelas_id,tempat_program_id,tempat_program_name FROM tb_tempatprogram WHERE kelas_id='$bimbingan'");
echo "<option>-- Pilih Tempat Program --</option>";
while($k = mysql_fetch_array($program)){
    echo "<option value=\"".$k['tempat_program_id']."\">".$k['tempat_program_name']."</option>\n";
}
?>