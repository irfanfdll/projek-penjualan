<?php
include '../database.php';
$pem = new pembeli();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_pembeli = @$_POST['id_pembeli'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $jk = $_POST['jk'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create") {
        $pem->create($nama_pembeli, $jk, $no_telp, $alamat);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $pem->update($id_pembeli, $nama_pembeli, $jk, $no_telp, $alamat);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $pem->delete($id_pembeli);
        header("location:index.php");
    }

}
