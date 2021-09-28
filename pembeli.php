<?php
class pembeli extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datapembeli = mysqli_query($this->koneksi, "select * from pembeli");
        // var_dump($datapembeli);
        return $datapembeli;
    }

    // Menambah Data
    public function create($nama_pembeli, $jk, $no_telp, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pembeli values(null,'$nama_pembeli', '$jk','$no_telp','$alamat')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id_pembeli)
    {
        $datapembeli = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id_pembeli='$id_pembeli'"
        );
        return $datapembeli;
    }

    // Menampilkan data berdasarkan id_pembeli
    public function edit($id_pembeli)
    {
        $datapembeli = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id_pembeli='$id_pembeli'"
        );
        return $datapembeli;
    }
    // mengupdate data berdasarkan id_pembeli
    public function update($id_pembeli, $nama_pembeli, $jk, $no_telp, $alamat)
    {
        mysqli_query(
            $this->koneksi,
            "update pembeli set nama_pembeli='$nama_pembeli',alamat='$alamat',no_telp='$no_trlp', jk='$jk' where id_pembeli='$id_pembeli'"
        );
    }

    // menghapus data berdasarkan id_pembeli
    public function delete($id_pembeli)
    {
        mysqli_query($this->koneksi, "delete from pembeli where id_pembeli='$id_pembeli'");
    }
}
