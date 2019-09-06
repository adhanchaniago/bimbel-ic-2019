
<?php
error_reporting(0);
?>
<div class="o-page-wrap -post">
  <div class="container">
    <div class="u-row">
      <div class="u-col -t-2-4">
        <div class="m-post-single">
          <center>
              <h1 class="page-title">GALLERY</h1>
          </center>
          <div class="post-content">
            <div id='gallery-2' class='gallery galleryid-112 gallery-columns-3 gallery-size-thumbnail'>
            <?php
              include 'josys/class_pagination.php';
              $pagination = new Paging_get_all;           
              $batas    = 12;
              $posisi   = $pagination->cariPosisi($batas);

              $gallery= get_all("SELECT nama,gambar FROM album ORDER BY id_album DESC LIMIT $posisi,$batas");
              foreach ($gallery AS $key => $value) {
              ?>
                <figure class='gallery-item'>
                  <div class='gallery-icon landscape'>
                    <a href='joimg/album/<?php echo $value['gambar']; ?>'>
                      <img width="150" height="150 !important" src="joimg/album/<?php echo $value['gambar'] ?>" class="attachment-thumbnail" alt="<?php echo $value['nama']; ?>" />
                    </a>
                  </div>
                  <?php echo $value['nama']; ?>
                </figure>
              <?php
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pagination -->
<?php $jmldata     = count_rows("SELECT id_album FROM album ORDER BY id_album DESC");
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

<script type="text/javascript">
  WebFontConfig = {
    google: {
      families: [ 'Open Sans:300,400,600,700,300italic,400italic,600italic,700italic:latin' ]
    }
  };

  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1.5.0/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
</script>

<script type='text/javascript' src='site/wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>

<script type='text/javascript' src='site/wp-content/plugins/contact-form-7/includes/js/scriptsd7b7.js?ver=4.3'></script>


<style type="text/css">

  #pbOverlay { background:rgba(0,0,0,.90)  none repeat scroll 0% 0% !important; }

</style>
    
<script type="text/javascript">// <![CDATA[
jQuery(document).ready(function($) {

  $('.gallery img').each(function(i) {
    
    $alt = $(this).attr('alt');
    
    $(this).attr('alt', $alt.replace(/-|_/g, ' '));
    
    $altnew = $(this).attr('alt').toLowerCase().replace(/\b[a-z]/g, function(letter) {
      
          return letter.toUpperCase();
        
      });
      
    $(this).attr('alt', $altnew );  
    
    
    });
    
  // Fire!
  $('.gallery, .ghozylab-gallery').photobox('a',{
            autoplay: false,
            time: 1000,
            thumbs: true,
    }, callback);
  
    function callback(){
    
       console.log('image has been loaded');
     
    }

});
</script>
