<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Harga extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_harga";
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
        $hrg_waktu = $_POST['hrg_waktu'];
        $hrg_harga = $_POST['hrg_harga'];

        $sql = "INSERT INTO tb_harga (hrg_waktu, hrg_harga) VALUES (:hrg_waktu, :hrg_harga)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":hrg_waktu", $hrg_waktu);
        $stmt->bindParam(":hrg_harga", $hrg_harga);
        $stmt->execute();

    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_harga WHERE hrg_id=:hrg_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":hrg_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $hrg_waktu = $_POST['hrg_waktu'];
        $hrg_harga = $_POST['hrg_harga'];
        $hrg_id = $_POST['hrg_id'];

        $sql = "UPDATE tb_harga SET hrg_waktu=:hrg_waktu, hrg_harga=:hrg_harga WHERE hrg_id=:hrg_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":hrg_waktu", $hrg_waktu);
        $stmt->bindParam(":hrg_harga", $hrg_harga);
        $stmt->bindParam(":hrg_id", $hrg_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_harga WHERE hrg_id=:hrg_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":hrg_id", $id);
        $stmt->execute();

    }
}