<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$dosen = new pembeli();
foreach ($dosen->edit($_GET['id']) as $data) {
    $id_pembeli = $data['id_pembeli'];
    $nama_pembeli = $data['nama_pembeli'];
    $jk = $data['jk'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

}
?>
    <fieldset>
        <legend>Edit Data dosen</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id_pembeli" value="<?php echo $id_pembeli; ?>">
            <table>


                 <tr>
                    <th align="left">Nama Pembeli</th>
                    <td> : </td>
                    <td><input type="text" name="nama_pembeli" value="<?php echo $nama_pembeli; ?>" required></td>
                </tr>
                <tr>
                    <th align="left">Jenis kelamin</th>
                    <td > : </td>
                    <td><input  type="radio"  name="jk" value="Laki-laki" >
                    Laki-laki
                    <input type="radio" name="jk" value="Perempuan"  required>
                    Perempuan</td>
               </tr>
               <tr>
                    <th align="left">No Telephon</th>
                    <td> : </td>
                    <td><input type="number" name="no_telp" value="<?php echo $no_telp; ?>" required></td>
                </tr>
                <tr>
                    <tr>
                    <th align="left">Alamat</th>
                    <td> : </td>
                    <td><input name="alamat" value="<?php echo $alamat; ?>"  required></input></td>
                </tr>
                <tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>