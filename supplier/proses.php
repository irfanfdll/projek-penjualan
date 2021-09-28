<?php
include '../database.php';
$supp = new supplier();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id_supplier = @$_POST['id_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create") {
        $supp->create($nama_supplier, $no_telp, $alamat);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $supp->update($id_supplier, $nama_supplier, $no_telp, $alamat);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $supp->delete($id_supplier);
        header("location:index.php");
    }

}
