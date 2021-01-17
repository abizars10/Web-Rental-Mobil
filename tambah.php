<?php
require_once 'koneksi.php';
if (isset($_POST['KODEM'])) {
  $KODEM = $_POST['KODEM'];
  $JENIS = $_POST['JENIS'];
  $MERK = $_POST['MERK'];
  $TARIF = $_POST['TARIF'];
  $NOPOL = $_POST['NOPOL'];
  
	$query = "INSERT INTO DATAMOBIL (KODEM,JENIS,MERK,TARIF,NOPOL) VALUES ('".$KODEM."','".$JENIS."','".$MERK."','".$TARIF."','".$NOPOL."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
	 
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Mobil berhasil ditambahkan'); 
	window.location.href='datamobil.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Mobil gagal ditambahkan');
	window.location.href='datamobil.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: datamobil.php'); 
}