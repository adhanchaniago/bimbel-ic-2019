<?php
error_reporting(0);
  $sql_program="select * from siswalolos where id_logosiswalolos = '".$_GET['id']."'";
  //echo $sql_program; exit;
  $result_program=mysql_query($sql_program);
  $rows=mysql_num_rows($result_program);

  $data_program=mysql_fetch_assoc($result_program);
?>
 <div class="o-page-wrap">
  <div class="container">
    <div class="m-page-single">
      <!--   <h1 class="page-title"><?php //echo $data_program['title'];?></h1> -->
      <div class="page-content">

        <div class="u-row">
                <div class="page-content">
          
                 <p><?php 
                 if($rows == 0 ){
                    $sql_link="select * from id_logosiswalolos where id_logosiswalolos ='$_GET[id]'";
                    $result_linkterkait=mysql_query($sql_link);
                    $data_link=mysql_fetch_assoc($result_linkterkait);
                    echo "Ma'af Untuk data siswa Lolos IC <b>".$data_link['nama']."</b> Masih Kosong";
                 }else{
                 echo $data_program['content']; 
               }
                 ?></p>
                </div>
        </div>

      </div>
    </div>
  </div>
</div>