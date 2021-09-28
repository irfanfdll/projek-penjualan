<?php
class barang extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $databarang = mysqli_query($this->koneksi, "select * from barang");
        // var_dump($databarang);
        return $databarang;
    }

    // Menambah Data
    public function create($nama_barang, $harga,$stok, $id_supplier)
    {
        mysqli_query(
            $this->koneksi,
            "insert into barang values(null,'$nama_barang', '$stok','$harga','$id_supplier')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id_barang)
    {
        $databarang = mysqli_query(
            $this->koneksi,
            "select * from barang where id_barang='$id_barang'"
        );
        return $databarang;
    }

    // Menampilkan data berdasarkan id_barang
    public function edit($id_barang)
    {
        $databarang = mysqli_query(
            $this->koneksi,
            "select * from barang where id_barang='$id_barang'"
        );
        return $databarang;
    }
    // mengupdate data berdasarkan id_barang
    public function update($id_barang, $nama_barang, $harga, $stok, $id_supplier)
    {
        mysqli_query(
            $this->koneksi,
            "update barang set nama_barang='$nama_barang',harga='$harga',stok='$stok',,id_supplier='$id_transaksi' where id_barang='$id_barang'"
        );
    }

    // menghapus data berdasarkan id_barang
    public function delete($id_barang)
    {
        mysqli_query($this->koneksi, "delete from barang where id_barang='$id_barang'");
    }
}
