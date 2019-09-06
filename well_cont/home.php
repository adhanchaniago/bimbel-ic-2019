  <?php
  include("well_inc/slider.php");
   ?>
</div>

<!-- siswa ic -->
<div class="o-home-alumni">
    <div class="bg"></div>
    <div class="container" style=" margin-bottom: -45px;  margin-top: -80px;">
        <div class="u-row">
            <div class="u-col -col-1">
                <h2 class="a-section-title" style="font-size: 24px; color: #fff;">SISWA IC <span> LOLOS PT</span></h2>
                <div class="u-text-center">
                    <a href="alumni-indonesia-college-yogyakarta.html" class="a-button -medium -blue">Selengkapnya</a>
                </div>
            </div>

            <div class="u-col -col-2">
                <ul class="m-list-alumni">
                <?php
                    $alumni_home= get_all("SELECT * FROM logosiswalolos WHERE status_link='Y' ORDER BY id_logosiswalolos DESC");
                    foreach ($alumni_home as $key => $value) {
                    ?>
                        <li>
                            <a href="siswa-ic-lolos-perguruan-tinggi-<?php echo $value['id_logosiswalolos']; ?>.html">
                                <img src="joimg/linkterkait/<?php echo $value['gambar']; ?>" alt="<?php echo $value['nama']; ?>" class="photo" />
                            </a>
                            <span class="name"><?php echo $value['nama']; ?></span>
                        </li>
                    <?php
                    }
                ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end siswa ic -->

<!-- info &testimoni -->
<div class="o-home-testimonial2">
    <div class="container"  style="margin-top: 30px;margin-bottom:32px;">
        <div class="u-row">

            <div class="u-col -t-2-5" style="width: 50%;">
                <h2 class="a-section-title">Info Penting</h2>
                <?php
                    $info_penting_home= get_all("SELECT * FROM articles  ORDER BY id_articles DESC LIMIT 12");
                    foreach ($info_penting_home as $key => $value) {
                    ?>
                        <p class="section-subtitle">
                            <u>
                                <a href="info-penting-<?php echo $value['seo'];?>-<?php echo $value['id_articles']; ?>.html" style="font-size: 19px;">
                                    <strong>
                                        <?php
                                        //get string title info penting
                                        $text_ip= $value['title'];
                                        //get length info penting(ip) title
                                        $length_ip= strlen($text_ip);
                                        echo $length_ip>50? $text_ip.' . . . ' : $text_ip;
                                    ?>  
                                    </strong>
                                </a>
                            </u>
                        </p>

                    <?php
                    }
                ?>
            </div>

            <div class="u-col -t-3-5" style="width: 50%;">
                <h2 class="a-section-title">Testimoni</h2>
                <ul class="m-list-testimonial">
                <?php
                    $testimoni_home= get_all("SELECT * FROM testimoni ORDER BY id_testimoni DESC LIMIT 3");
                    foreach ($testimoni_home as $key => $value) {
                    ?>
                        <li>
                            <img src="joimg/testimoni/<?php echo $value['gambar']; ?>" alt="M Imam Prasetyo" class="photo" />
                            <span class="name">
                                <?php echo $value['nama']; ?>
                            </span>
                            <span class="quote">
                            <?php
                                // get string description testimoni home(th)
                                $text_th    = $value['isi'];
                                // get length description testimoni home(th)
                                $length_th  = strlen($text_th);
                                //decode description testimoni homr to html code
                                $decode_th  = html_entity_decode($text_th);
                                echo $length_th>250? substr($decode_th, 0, 100).' . . . ' : $decode_th ;
                            ?>
                            </span>

                        </li>
                        
                    <?php
                    }
                ?>
                </ul>
                <a href="testimoni-indonesia-college-yogyakarta.html" class="a-button -medium -blue -block" style="width: 47%;">Selengkapnya</a>
            </div>

        </div>
    </div>
</div>
<!-- end info &testimoni -->

<!-- Video start -->
<div class="o-home-videos">
    <div class="bg"></div>
    <div class="container">
        <h2 class="a-section-title"><img src="site/wp-content/themes/sg2015/img/icon-videos.png" alt="" class="icon"> IC VIDEO</h2>

        <div class="u-row">
            <div class="u-col -col-1">

                <div class="m-video-player">
                    <div class="video-wrap">
                        <div class="player">
                        </div>
                        <div class="placeholder">
                        <?php
                            //get one last video(lv) 
                            $lv_home= get_one("SELECT judul,video FROM video ORDER BY id DESC LIMIT 1");
                        ?>
                            <iframe width="100%" height="380" src="<?php echo $lv_home['video']; ?>" frameborder="0" allowfullscreen></iframe>

                        </div>
                    </div>
                    <?php echo $lv_home['judul']; ?>
                </div>

            </div>

            <div class="u-col -col-2">
                <ul class="m-list-thumb -video" style="color: #fff;">
                <?php
                    $video_home= get_all("SELECT judul,video FROM video ORDER BY id DESC LIMIT 1,3");
                    foreach ($video_home as $key => $value) {
                    ?>
                        <li>
                            <iframe width="170" height="120" src="<?php echo $value['video']; ?>" frameborder="0" class="thumb"  allowfullscreen></iframe>
                            <p class="title"><?php echo $value['judul']; ?></p>
                        </li>
                    <?php
                    }
                ?>
                </ul><br><br>
                <a href="video-indonesia-college-yogyakarta.html" class="a-button -medium -blue -block" style="width: 47%;">Selengkapnya</a>
            </div>

        </div>
    </div>
</div>
<!-- video end -->

<div class="o-home-other">
    <div class="container">
        <div class="u-row">
            <!-- GALLERY start -->
            <div class="u-col -t-3-5">
                <div class="o-home-photos">
                    <h2 class="a-section-title"><img src="site/wp-content/themes/sg2015/img/icon-gallery.png" alt="" class="icon"> GALLERY</h2>
                    <ul class="m-list-thumb -photo gallery" style="width: 100%">
                    <?php
                        $galery_home= get_all("SELECT nama,gambar FROM album ORDER BY id_album DESC LIMIT 4");
                        foreach ($galery_home as $key => $value) {
                        ?>
                            <li style="width: 50%;display: block; float: left;">
                                <a href='joimg/album/<?php echo $value['gambar']; ?>' class="thumb" style="float: none;">
                                    <img src="joimg/album/<?php echo $value['gambar']; ?>" alt="" width="100%">
                                </a>
                                <p class="title"><?php echo $value['nama']; ?></p>
                            </li>
                        <?php
                        }
                    ?>
                    </ul>
                    <ul style="width: 100%">
                        <li style="width: 50%;margin-left: -35px;list-style: none;">
                            <a href="gallery-indonesia-college-yogyakarta--.html" class="a-button -yellow" style="border-radius: 90px;">Selengkapnya</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- GALLERI END -->

            <!-- home page -->
            <div class="u-col -t-2-5">
                <div class="">
                    <a class="twitter-timeline"  href="https://twitter.com/Indo_College" data-widget-id="527105629551202304">Tweets by @Indo_College</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="m-twitter-widget">
                    <div class="fb-page" data-href="https://www.facebook.com/bimbelstanjaminan/" data-tabs="timeline" data-width="400" data-height="360" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bimbelstanjaminan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bimbelstanjaminan/">Indonesia College Yogyakarta</a></blockquote>
                </div>
            </div>
            <!-- end home page -->
        </div>
    </div>
</div>

</div>
    
<script type="text/javascript">
(function(galeri){
    galeri('.gallery').photobox('a',{
            autoplay: false,
            time: 1000,
            thumbs: true,
    }, callback);

    function callback(){

       console.log('image has been loaded');
     
    }
})(jQuery);
</script>