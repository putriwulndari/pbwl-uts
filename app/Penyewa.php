<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Penyewa extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_penyewa";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $pen_nama = $_POST['pen_nama'];
        $pen_telp = $_POST['pen_telp'];

        $sql = "INSERT INTO tb_penyewa (pen_nama, pen_telp) VALUES (:pen_nama, :pen_telp)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pen_nama", $pen_nama);
        $stmt->bindParam(":pen_telp", $pen_telp);
        $stmt->execute();

    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_penyewa WHERE pen_id=:pen_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pen_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $pen_nama = $_POST['pen_nama'];
        $pen_telp = $_POST['pen_telp'];
        $pen_id = $_POST['pen_id'];

        $sql = "UPDATE tb_penyewa SET pen_nama=:pen_nama, pen_telp=:pen_telp WHERE pen_id=:pen_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pen_nama", $pen_nama);
        $stmt->bindParam(":pen_telp", $pen_telp);
        $stmt->bindParam(":pen_id", $pen_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_penyewa WHERE pen_id=:pen_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pen_id", $id);
        $stmt->execute();

    }
}