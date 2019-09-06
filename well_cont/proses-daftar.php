<?php

  $nama_peserta=htmlspecialchars($_POST['nama_peserta']);
  $tempat_lahir=htmlspecialchars($_POST['tempat_lahir']);
  $birth_date=htmlspecialchars($_POST['tanggal_lahir']);
  // $date = '25/05/2010';
  // $date = str_replace('/', '-', $birth_date);
  $tanggal_lahir= date('Y-m-d', strtotime($birth_date));
  // echo "$tanggal_lahir".'<br>';
  // echo "$birth_date";
  // die();
  $jenis_kelamin=htmlspecialchars($_POST['jenis_kelamin']);
  $alamat=htmlspecialchars($_POST['alamat_rumah']);
  $no_hp_peserta=htmlspecialchars($_POST['no_hp_peserta']);
  $email=htmlspecialchars($_POST['email']);
  $asal_sekolah=htmlentities($_POST['asal_sekolah']);
  $nama_ortu=htmlspecialchars($_POST['nama_ortu']);
  $pekerjaan=htmlspecialchars($_POST['pekerjaan']);
  $no_hp_ortu=htmlspecialchars($_POST['no_hp_ortu']);
  $bimbingan=htmlspecialchars($_POST['bimbingan']);
  $program=htmlspecialchars($_POST['program']);
  $kelas=htmlspecialchars($_POST['kelas']);
  $tempat_program=htmlspecialchars($_POST['tempat_program']);
  $asrama=htmlspecialchars($_POST['asrama']);

  //Foto Peserta Start
  $lokasi_file    = $_FILES['foto_peserta']['tmp_name'];
  $tipe_file      = $_FILES['foto_peserta']['type'];
  $nama_file      = $_FILES['foto_peserta']['name'];
  $acak           = rand(000000,999999);
  $nama           = "foto_peserta_";
  $nama_file_unik = str_replace(' ', '',$nama.$acak.$nama_file);
  //Foto Peserta End
  $lokasi_file_bukti    = $_FILES['bukti_bayar']['tmp_name'];
  $tipe_file_bukti      = $_FILES['bukti_bayar']['type'];
  $nama_file_bukti      = $_FILES['bukti_bayar']['name'];
  $acak_bukti           = rand(000000,999999);
  $nama_bukti           = "bukti_bayar_";
  $nama_file_unik_bukti = str_replace(' ', '', $nama_bukti.$acak_bukti.$nama_file_bukti);

  //echo $nama_file_unik_bukti; exit();


  //if (!empty($lokasi_file)){                      //jika foto tidak kosong
  UploadFotoPeserta($nama_file_unik);
  // echo "OKE";
  UploadBuktiBayar($nama_file_unik_bukti);
   $sql="INSERT INTO daftar_online VALUES ('','$nama_peserta',
                        '$tempat_lahir',
                        '$tanggal_lahir',
                        '$jenis_kelamin',
                        '$alamat',
                        '$no_hp_peserta',
                        '$email',
                        '$asal_sekolah',
                        '$nama_file_unik',
                        '$nama_file_unik_bukti',
                        '$nama_ortu',
                        '$pekerjaan',
                        '$no_hp_ortu',
                        '$bimbingan',
                        '$program',
                        '$kelas',
                        '$tempat_program',
                        '$asrama',NOW())";
                        //  echo $sql; exit;
   $result=mysql_query($sql);
   //if($result){


    //mail body - image position, background, font color, font size...
   $sql_bimbingan=mysql_query("select * from tb_bimbingan where bimbingan_id='".$bimbingan."'");
   $data_bimbingan=mysql_fetch_assoc($sql_bimbingan);

   $sql_program=mysql_query("select * from tb_program where program_id='".$program."'");
   $data_program=mysql_fetch_assoc($sql_program);

   $sql_kelas=mysql_query("select * from tb_kelas where kelas_id='".$kelas."'");
   $data_kelas=mysql_fetch_assoc($sql_kelas);

   $sql_tempatprogram=mysql_query("select * from tb_tempatprogram where tempat_program_id='".$tempat_program."'");
   $data_tempatprogram=mysql_fetch_assoc($sql_tempatprogram);

   $sql_asrama=mysql_query("select * from tb_asrama where asrama_id='".$asrama."'");
   $data_asrama=mysql_fetch_assoc($sql_asrama);

  $user = mysql_query("SELECT email FROM users WHERE username='admin'");
  $g=mysql_fetch_object($user);



    $body ='<html>
    <head>

    </head>
    <body>
    <div class="content">
    <!--<h1>Formulir Pendaftaran Online</h1>-->
    <h2>'.$nama_peserta.'</h2>
    <h4><strong>Foto Peserta :</strong></h4>
    <img width="256px" src="http://bimbel-ic.com/joimg/daftar-online/'.$nama_file_unik.'" /><br />
    <h4><strong>Bukti Pembayaran :</strong></h4>
    <img width="256px" src="http://bimbel-ic.com/joimg/daftar-online/'.$nama_file_unik_bukti.'" /><br />
      <!--Nama Peserta  : $nama_peserta<br>-->
      <table>
        <tr border="1">
          <td>Tempat Lahir</td>
          <td>  : </td>
          <td>'.$tempat_lahir.'</td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td> : </td>
          <td>'.$tanggal_lahir.'</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td> : </td>
          <td>'.$jenis_kelamin.'</td>
        </tr>
        <tr>
          <td>Alamat Rumah</td>
          <td>  : </td>
          <td>'.$alamat.'</td>
        </tr>
        <tr>
          <td>Nomor HP Peserta</td>
          <td>  : </td>
          <td>'.$no_hp_peserta.'</td>
        </tr>
        <tr>
          <td>Email</td>
          <td> : </td>
          <td>'.$email.'</td>
        </tr>
        <tr>
          <td>Asal Sekolah</td>
          <td>  : </td>
          <td>'.$asal_sekolah.'</td>
        </tr>
        <tr>
          <td>Nama Orang Tua</td>
          <td>  : </td>
          <td>'.$nama_ortu.'</td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td> : </td>
          <td>'.$pekerjaan.'</td>
        </tr>
        <tr>
          <td>Nomor HP Ortu</td>
          <td> : </td>
          <td>'.$no_hp_ortu.'</td>
        </tr>
        <tr>
          <td>Bimbingan</td>
          <td> : </td>
          <td>'.$data_bimbingan['bimbingan_name'].'</td>
        </tr>
        <tr>
          <td>Program</td>
          <td> : </td>
          <td>'.$data_program['program_name'].'</td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td> : </td>
          <td>'.$data_kelas['kelas_name'].'</td>
        </tr>
        <tr>
          <td>Tempat Program</td>
          <td>  : </td>
          <td>'.$data_tempatprogram['tempat_program_name'].'</td>
        </tr>
        <tr>
          <td>Asrama</td>
          <td>  : </td>
          <td>'.$data_asrama['asrama_name'].'</td>
        </tr>
        <tr>
          <td>Date</td>
          <td>  : </td>
          <td>'.date('Y-m-d').'</td>
        </tr>
      
    </div>
    </body>';
    //echo $body; exit;
    //to send HTML mail, the Content-type header must be set:
    $headers='MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html;charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$nama_peserta.' <'.$email.'>' . "\r\n";
    $to = $g->email;
    $subject = "Formulir Pendaftaran Online";
    //mail function
    $mail = mail($to, $subject, $body, $headers);




    header("location: daftar-online-sukses.html");
 //  }
  // echo $sql; exit;
  //
?>
