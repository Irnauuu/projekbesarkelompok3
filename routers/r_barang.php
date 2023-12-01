<?php
// untuk memanggil file c_barang
include_once '../controllers/C_barang.php';

$barang = new C_barang();

if($_GET['aksi'] == 'tambah') {

$nip = $_POST['nip'];
$nama = $_POST['nama_pegawai'];
$mata_pelajaran = $_POST['Mata_pelajaran'];


$barang->tambah($nip = 0 ,$nama, $mata_pelajaran);

}elseif ($_GET['aksi'] == 'updates') {

    $nip = $_POST['nip'];
    $nama = $_POST['nama_pegawai'];
    $mata_pelajaran = $_POST['Mata_pelajaran'];

} elseif ($_GET['aksi'] == 'hapus') {
    $nip = $_GET ['nip'];
    $barang->delete($nip);

    
}

?>