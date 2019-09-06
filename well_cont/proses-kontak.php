<?php
$nama=htmlspecialchars($_POST['nama']);
$email=htmlspecialchars($_POST['email']);
$alamat=htmlspecialchars($_POST['alamat']);
$pesan=htmlspecialchars($_POST['pesan']);

$sql="insert into kontak values ('','$nama','$email','alamat','$pesan')";
$result=mysql_query($sql);
if($result){
	header('location: kontak-sukses.html');
}
?>