 <div class="o-page-wrap">
  <div class="container">
    <div class="m-page-single">
        <h1 class="page-title">Biaya</h1>
      <div class="page-content">

        <div class="u-row">
                <div class="page-content">
                   <?php
                   $sql_profil="select * from modul where id_modul='16'";
                   $result_sql=mysql_query($sql_profil);
                   $data_profil=mysql_fetch_assoc($result_sql);
                   echo $data_profil['static_content'];
                   ?>
                </div>
        </div>

      </div>
    </div>
  </div>
</div>