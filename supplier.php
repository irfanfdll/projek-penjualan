<?php
class supplier extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datasupplier = mysqli_query($this->koneksi, "select * from supplier");
        // var_dump($datasupplier);
        return $datasupplier;
    }

    // Menambah Data
    public function create($nama_supplier, $no_telp, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into supplier values(null,'$nama_supplier','$no_telp','$alamat')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id_supplier)
    {
        $datasupplier = mysqli_query(
            $this->koneksi,
            "select * from supplier where id_supplier='$id_supplier'"
        );
        return $datasupplier;
    }

    // Menampilkan data berdasarkan id_supplier
    public function edit($id_supplier)
    {
        $datasupplier = mysqli_query(
            $this->koneksi,
            "select * from supplier where id_supplier='$id_supplier'"
        );
        return $datasupplier;
    }
    // mengupdate data berdasarkan id_supplier
    public function update($id_supplier, $nama_supplier, $no_telp, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update supplier set nama_supplier='$nama_supplier',alamat='$alamat',no_telp='$no_telp' where id_supplier='$id_supplier'"
        );
    }

    // menghapus data berdasarkan id_supplier
    public function delete($id_supplier)
    {
        mysqli_query($this->koneksi, "delete from supplier where id_supplier='$id_supplier'");
    }
}
