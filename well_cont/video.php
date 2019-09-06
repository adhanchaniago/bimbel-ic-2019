<div class="o-page-wrap">
  <div class="container">
    <div class="m-page-single">
      <h1 class="page-title">VIDEO</h1>
      <div class="page-content">
        <div class="u-row">

          <?php
            include 'josys/class_pagination.php';
            $pagination = new Paging_get_all;           
            $batas    = 8;
            $posisi   = $pagination->cariPosisi($batas);

            $video = get_all("SELECT * FROM video ORDER BY id DESC LIMIt $posisi,$batas");
            foreach ($video as $key => $value) {
            ?>
              <div class="u-col -t-1-2">
                <div class="m-testimoni">
                 <iframe width="100%" height="250px" src="<?php echo $value['video']; ?>" frameborder="0" class="thumb"  allowfullscreen></iframe>  
                  <p class="name"><?php echo $value['judul']; ?></p>
                  <p class="info">
                    <span class="from">
                      <strong>Asal Sekolah : </strong>
                      <?php echo $value['asal_sekolah']!=''? $value['asal_sekolah'] : '-' ?>
                    </span>
                    <span class="ptn">
                      <strong>Diterima : </strong>
                      <?php echo $value['diterima']!=''? $value['diterima'] : '-' ?>
                    </span>
                  </p>
                  <p class="quote"><?php echo $value['deskripsi']; ?></p>
                </div>
              </div>
            <?php
            }
          ?>
        </div>

        <!-- Pagination -->
        <?php $jmldata     = count_rows("SELECT * FROM video ORDER BY id DESC");
        if($jmldata > $batas){?>
          
        <center>
          <ul class="cs-paging">   
            <?php 
            $jmlhalaman  = $pagination->jumlahHalaman($jmldata, $batas);
            $linkHalaman = $pagination->navHalaman($_GET['halaman'], $jmlhalaman);
            echo "$linkHalaman ";
            ?> 
          </ul>
        </center>
              
        <?php }?>
        <!--end Pagination --> 

      </div>
    </div>
  </div>
</div>