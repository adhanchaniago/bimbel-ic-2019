<style type="text/css">
.cs-tb-footer-bottom tbody tr td{
    padding: 0px 3px;
}
/* Create three equal columns that floats next to each other */
.column {
    float: left;
    /*width: 33.33%;*/
    width: 50%;
}

/* Clear floats after the columns */
.u-row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other on smaller screens (600px wide or less) */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
<div class="o-site-footer">
    <!-- footer top -->
    <div class="footer-top">
        <div class="bg"></div>
        <div class="container">
            <div class="u-row">

                <div class="column">
                    <div class="m-footer-widget">
                        <h3 class="title">Link Terkait</h3>

              			<div class="link-terkait">
                			<table border='0' width="100%">
              				 	<tr>
            				 	<?php
                                    $rows= get_all("select * from linkterkait ");
                                    $i=0;
                                    foreach($rows AS $key => $value){
                                    $i++;

                				 	?>
            				 	    <td width="20%">
                                        <a href="<?php echo $value['link']; ?>" target="_BLANK" class="thumbnail" id="carousel-selector-1">
                                            <img src="joimg/linkterkait/<?php echo $value['gambar']; ?>" style="width: 100%;">
                                        </a>
                  				 	    <p style="text-align: center;"><?php echo $value['nama']; ?></p>
            				 	    </td>
            				 	  
                                    <?php
                                        if($i%5==0){
                                          echo "</tr>";
                                        }

                                    }
                                ?>
                			</table>
              			</div>

                    </div>
                </div>

          <!-- <div class="u-col -col-2 border" style="width: 7%;">

          </div> -->

                <div class="column">
                    <div class="m-footer-widget">
                        <h3 class="title">Hubungi Kami</h3>
                        <div class="content">
                            <p>
                                <table border='0'>
                                <?php
                                    $rows= get_all("SELECT * FROM hubungikami ORDER BY id_hubungikami DESC");
                                    foreach($rows AS $key => $value){
                                    ?>
                                        <tr>
                                            <td><img src="joimg/hubungikami/<?php echo $value['gambar']; ?>"></td>
                                            <td><?php echo $value['alamat']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                ?>
                                </table>
                            </p>

                            <p class="u-mb30">
                              <a href="cabang-lainnya-indonesia-college-yogyakarta.html" class="a-button -medium -blue" style="background: #161753;">Cabang Lainnya</a>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- end footer top -->

    <!-- footer bottom -->
    <div class="footer-bottom">
        <div class="container">
            <br>
            <div class="u-row">

                <!-- left footer bottom -->
                <!-- <div class="column"> -->
                <?php
                    $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
                    date_default_timezone_set('Asia/Jakarta');
                    $tanggal = date('Y-m-d'); // Mendapatkan tanggal sekarang
                    $waktu   = time(); //

                    $pengunjung       = mysql_num_rows(mysql_query("SELECT tanggal,ip FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
                    $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0);
                    $hits             = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik WHERE tanggal='$tanggal'"), 0);
                    $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0);
                    $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0);
                    $bataswaktu       = time() - 300;
                    $pengunjungonline = mysql_num_rows(mysql_query("SELECT online FROM statistik WHERE online > '$bataswaktu'"));
                ?>
                    <!-- <table class="cs-tb-footer-bottom">
                        <tr>
                            <td>Hits hari ini</td>
                            <td>:</td>
                            <td><?php //echo "$hits"; ?></td>
                            <td>&nbsp;</td>
                            <td>Pengunjung hari ini</td>
                            <td>:</td>
                            <td><?php //echo "$pengunjung"; ?></td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Total hits</td>
                            <td>:</td>
                            <td><?php //echo "$totalhits"; ?></td>
                            <td>&nbsp;</td>
                            <td>Total pengunjung</td>
                            <td>:</td>
                            <td><?php //echo "$totalpengunjung"; ?></td>
                        </tr>
                    </table> -->
                <!-- </div> -->
                <!-- end left footer bottom -->
                
                <div>
                    <div class="m-social cs-social" style="text-align:center !important">
                        <p class="title">Connect with us</p>
                        <ul>
                            <li><a href="http://twitter.com/Indo_College" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.facebook.com/bimbelstanjaminan" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCq8G3UVU7aqEqXL9F2uJG7Q" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://www.instagram.com/indonesiacollege_yogya/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <p class="title">&copy; 2016 IC. All Rights Reserved. Developed by <a style="color:#eee" href="http://jogjasite.com/">JogjaSite</a></p>
                    </div>
                </div>

                <!-- right footer bottom -->
                <!--<div class="column">
                    <div class="m-social cs-social">
                        <p class="title">Connect with us</p>
                        <ul>
                            <li><a href="http://twitter.com/Indo_College" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.facebook.com/bimbelstanjaminan" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCq8G3UVU7aqEqXL9F2uJG7Q" target="_blank" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://www.instagram.com/indonesiacollege_yogya/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <p class="copyright" style="text-align: right;">&copy; 2016 IC. All Rights Reserved. Developed by <a href="http://jogjasite.com/">JogjaSite</a></p>
                    </div>
                </div>-->
                <!-- end right footer bottom -->
            
            </div>
            <!-- end u-row -->
        </div>
    </div>
    <!-- end footer bottom -->
</div>