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
                    <th align="left">Nama Barang</th>
                    <td> : </td>
                    <td><input type="text" name="nama_barang" required></td>
                </tr>
               <tr>
                    <th align="left">Harga</th>
                    <td> : </td>
                    <td><input type="number" name="harga" required></td>
                </tr>
                <tr>
                    <tr>
                    <th align="left">Stock</th>
                    <td> : </td>
                    <td><textarea name="stok" required></textarea></td>
                </tr>
                <tr>
                <tr>
                    <tr>
                    <th align="left">Id Supplier</th>
                    <td> : </td>
                    <td><textarea name="id_supplier" required></textarea></td>
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
