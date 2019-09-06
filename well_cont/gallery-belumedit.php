<div class="o-page-wrap">
  <div class="container">
    <div class="m-page-single">
            <h1 class="page-title">Galeri</h1>
      <div class="page-content">
        <div class="u-row">

          <?php
          $sql_testimoni="select * from galeri limit 12";
          $result_testimoni=mysql_query($sql_testimoni);
          while($data_testimoni=mysql_fetch_assoc($result_testimoni)){
          ?>
                  <div class="u-col -t-1-2">
                      <div class="m-testimoni">
                        <img src="joimg/galeri/<?php echo $data_testimoni['gambar']; ?>" alt="" class="photo" />              
                        <p class="name"><?php echo $data_testimoni['nama']; ?></p>
                       <!--  
                       <p class="info">
                          <span class="from">SMAN 3 TangSel</span>
                          <span class="ptn">UI-Teknik Elektro</span>
                        </p> -->
                      </div>
                  </div>
          <?php
            }
          ?>
      </div>
     <!--  
     <div class="m-pagination u-mt30">
          <div class='wp-pagenavi'>
          <span class='pages'>Halaman 1 dari 2</span><span class='current'>1</span><a class="page larger" href="page/2/index.html">2</a><a class="nextpostslink" rel="next" href="page/2/index.html">»</a>
          </div>        
      </div>
    -->
      </div>
    </div>
  </div>
</div>