<?php
require_once 'koneksi.php';
if (isset($_POST['KODEP'])) {
  $KODEP = $_POST['KODEP'];
  $NAMA = $_POST['NAMA'];
  $KONTAK = $_POST['KONTAK'];
  $ALAMAT = $_POST['ALAMAT'];
  
	$query = "INSERT INTO PELANGGAN (KODEP,NAMA,KONTAK,ALAMAT) VALUES ('".$KODEP."','".$NAMA."','".$KONTAK."','".$ALAMAT."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
	 
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Pelanggan berhasil ditambahkan'); 
	window.location.href='pelanggan.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Pelanggan gagal ditambahkan');
	window.location.href='pelanggan.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pelanggan.php'); 
}