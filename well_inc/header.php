<div class="o-site-topbar">
    <div class="container">
        <div class="search-wrap">
            <form action="#" class="m-search-form">
                <input type="text" name="s" class="search" placeholder="Cari..." required="" value="">
                <button type="submit" class="search-submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>
<div class="o-site-header">
    <div class="container">
        <a class="home-link" href="indonesia-college-yogyakarta.html" title="Bimbel IC" rel="home">
            <img class="logo" src="site/wp-content/themes/sg2015/img/logo.jpg" alt="" style="margin-left: -54px;margin-bottom: -109px;margin-top: -15px;">
        </a>
    </div>
</div>
<div class="o-site-header">
    <div class="container">
        <ul class="menu">
            <li <?php if($_GET['mod']=='home'){ echo 'class="current-menu-item"';} ?>>
                <a href="indonesia-college-yogyakarta.html">Beranda</a>
            </li>
            <li <?php if(($_GET['mod']=='profil') || ($_GET['mod']=='keunggulan') || ($_GET['mod']=='visi-dan-misi')){echo 'class="current-menu-item"';} ?>>
                <a href="#">Tentang IC</a>
                <ul class="sub-menu">
                    <li>
                        <a href="profil.html">  > Profil</a>
                    </li>
                    <li>
                        <a href="keunggulan.html"> > Keunggulan</a>
                    </li>
                    <li>
                        <a href="visi-dan-misi.html"> > Visi dan Misi</a>
                    </li>
                </ul>
            </li>
            <li  <?php if($_GET['mod']=='sub-program-bimbingan'){echo 'class="current-menu-item"';} ?>>
                <a href="#">Program Bimbingan</a>
                <ul class="sub-menu">
                    <?php
                        function seo($s){
                            $c = array (' ');
                            $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

                            $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
                            
                            $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
                            return $s;
                        }
                        $sql_program="select * from program" ;
                        $result_program=mysql_query($sql_program);
                        while($data_program=mysql_fetch_assoc($result_program)){ ?>
                            <li>
                                <a href="#"> >
                                <?php echo $data_program['program_name']; ?>
                                </a>
                        <ul class="sub-menu">
                            <?php
                                $sql_category="select * from subbimbingan where program_id='" .$data_program[ 'program_id']. "'";
                                $result_category=mysql_query($sql_category);
                                while($data_category=mysql_fetch_assoc($result_category)){ ?>
                                    <li>
                                        <a href="program-bimbingan-<?php echo seo($data_category['title']).'-'.$data_category['id_subbimbingan'];?>.html"> >
                                          <?php echo $data_category['title']; ?>
                                        </a>
                                    </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
            </li>
            <li <?php if($_GET['mod']=='jadwal'){echo 'class="current-menu-item"';} ?>>
                <a href="jadwal.html">Jadwal</a>
            </li>
            <li <?php if($_GET['mod']=='biaya'){echo 'class="current-menu-item"';} ?>>
                <a href="biaya.html">Biaya</a>
            </li>
            <li <?php if(($_GET['mod']=='cara-pendaftaran') || ($_GET['mod']=='daftar-online')){echo 'class="current-menu-item"';} ?>>
                <a href="#">Pendaftaran</a>
                <ul class="sub-menu">
                    <li>
                        <a href="cara-pendaftaran.html"> > Cara Pendaftaran</a>
                    </li>
                    <li>
                        <a href="daftar-online.html"> > Daftar Online</a>
                    </li>
                </ul>
            </li>
            <li <?php if($_GET['mod']=='kontak'){echo 'class="current-menu-item"';} ?>>
                <a href="kontak.html">Kontak</a>
            </li>
        </ul>
    </div>
</div>