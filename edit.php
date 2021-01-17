<?php
require_once 'koneksi.php';
if (isset($_POST['KODEM'])) {
  $KODEM = $_POST['KODEM'];
  $JENIS = $_POST['JENIS'];
  $MERK = $_POST['MERK'];
  $TARIF = $_POST['TARIF'];
  $NOPOL = $_POST['NOPOL'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  DATAMOBIL  SET JENIS ='".$JENIS."', MERK ='".$MERK."', TARIF ='".$TARIF."', NOPOL ='".$NOPOL."' WHERE KODEM = '".$KODEM."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Mobil berhasil diubah'); window.location.href='datamobil.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Mobil gagal diubah'); window.location.href='datamobil.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: datamobil.php'); 
}