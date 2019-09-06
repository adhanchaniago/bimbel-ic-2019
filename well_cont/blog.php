<?php
  $sql_profil="select * from articles where id_articles='$_GET[id]'";
  $result_sql=mysql_query($sql_profil);
  $data_profil=mysql_fetch_assoc($result_sql);
?>
 <div class="o-page-wrap">
  <div class="container">
    <div class="m-page-single">
        <h1 class="page-title"><?php echo $data_profil['title'];?></h1>
      <div class="page-content">

        <div class="u-row">
                <div class="page-content">

                 <p><?php echo $data_profil['content']; ?></p>
                </div>
        </div>

      </div>
    </div>
  </div>
</div>