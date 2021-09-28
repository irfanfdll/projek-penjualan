<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <nav>
            <a href="/">Data Dosen</a> |
            <a href="/mahasiswa">Data Mahasiswa</a>
        </nav>
    </center>
    <center>Data Dosen</center>
    <fieldset>
        <legend>Data pem</legend>
        <a href="create.php">Tambah Data Pembeli</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No Telephon</th>
                <th>Alamat</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$pem = new pembeli();
$no = 1;
// var_dump($pem->index());
foreach ($pem->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_pembeli']; ?></td>
                    <td><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['no_telp']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $data['id_pembeli']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id_pembeli']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id_pembeli']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>