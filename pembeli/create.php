<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<body>
    <fieldset>
        <legend>Input Data Pembeli</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <th align="left">Nama Pembeli</th>
                    <td> : </td>
                    <td><input type="text" name="nama_pembeli" required></td>
                </tr>
                <tr>
                    <th align="left">Jenis kelamin</th>
                    <td > : </td>
                    <td><input  type="radio"  name="jk" value="Laki-laki" >
                    Laki-laki
                    <input type="radio" name="jk" value="Perempuan">
                    Perempuan</td>
               </tr>
               <tr>
                    <th align="left">No Telephon</th>
                    <td> : </td>
                    <td><input type="number" name="no_telp" required></td>
                </tr>
                <tr>
                    <tr>
                    <th align="left">Alamat</th>
                    <td> : </td>
                    <td><textarea name="alamat" required></textarea></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
