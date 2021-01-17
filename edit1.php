<?php
require_once 'koneksi.php';
if (isset($_POST['KODEP'])) {
  $KODEP = $_POST['KODEP'];
  $NAMA = $_POST['NAMA'];
  $KONTAK = $_POST['KONTAK'];
  $ALAMAT = $_POST['ALAMAT'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  PELANGGAN  SET NAMA ='".$NAMA."', KONTAK ='".$KONTAK."', ALAMAT ='".$ALAMAT."' WHERE KODEP = '".$KODEP."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Pelanggan berhasil diubah'); window.location.href='pelanggan.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Pelanggan gagal diubah'); window.location.href='pelanggan.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pelanggan.php'); 
}