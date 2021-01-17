<?php
//membangun koneksi
$username="abizar_10073";
$password="abizar_10073";
$database="LOCALHOST/XE";
$hari_ini = date("Y-m-d");
$koneksi=oci_connect($username,$password,$database);

if(!$koneksi){
$err = oci_error();
echo "Gagal Tersambung Ke Oracle". $err['text'];
}else{
	
}
?>