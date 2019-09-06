<div class="o-page-wrap">
    <div class="container">
        <div class="m-page-single">
            <h1 class="page-title">SISWA IC LOLOS PERGURUAN TINNGI</h1>

            <div class="page-content">
                <div class="u-row">
                <?php
                    $alumni= get_all("SELECT id_logosiswalolos,nama,gambar FROM logosiswalolos ORDER BY id_logosiswalolos DESC limit 12");
                    foreach ($alumni as $key => $value) {
                    ?>
                    <div class="u-col -t-1-5">
                        <div class="m-alumni">
                            <a href="siswa-ic-lolos-perguruan-tinggi-<?php echo $value['id_logosiswalolos']; ?>.html">
                                <img src="joimg/linkterkait/<?php echo $value['gambar']; ?>" alt="Yala Abrara" class="photo"  style="border-radius: 95px; border: 9px solid rgb(0, 0, 0);"/>
                            </a>
                            <br><br><br>

                        </div>
                        <span class="name">
                            <h4 style="text-align: center;font-size: 16px; margin-top: -9px;">
                            <?php echo $value['nama']; ?></h4>
                        </span> 
                    </div>
                    <?php }
                ?>
                </div>

            </div>
        </div>
    </div>
</div> 