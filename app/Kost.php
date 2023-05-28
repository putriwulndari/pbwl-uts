<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Kost extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_kost ORDER BY kost_kamar ASC";
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
        $kost_kamar = $_POST['kost_kamar'];
        $kost_text = $_POST['kost_text'];

        $sql = "INSERT INTO tb_kost (kost_kamar, kost_text) VALUES (:kost_kamar, :kost_text)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kost_kamar", $kost_kamar);
        $stmt->bindParam(":kost_text", $kost_text);
        $stmt->execute();

    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_kost WHERE kost_id=:kost_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kost_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $kost_kamar = $_POST['kost_kamar'];
        $kost_text = $_POST['kost_text'];
        $kost_id = $_POST['kost_id'];

        $sql = "UPDATE tb_kost SET kost_kamar=:kost_kamar, kost_text=:kost_text WHERE kost_id=:kost_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kost_kamar", $kost_kamar);
        $stmt->bindParam(":kost_text", $kost_text);
        $stmt->bindParam(":kost_id", $kost_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_kost WHERE kost_id=:kost_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kost_id", $id);
        $stmt->execute();

    }
}