<?php
  $sql_program="select * from subbimbingan where id_subbimbingan = '".$_GET['id']."'";
  //echo $sql_program; exit;
  $result_program=mysql_query($sql_program);
  $data_program=mysql_fetch_assoc($result_program);
?>
 <div class="o-page-wrap">
  <div class="container">
    <div class="m-page-single">
        <h1 class="page-title"><?php echo $data_program['title'];?></h1>
      <div class="page-content">

        <div class="u-row">
                <div class="page-content">
      
                 <p><?php echo $data_program['content']; ?></p>
                </div>
        </div>

      </div>
    </div>
  </div>
</div>