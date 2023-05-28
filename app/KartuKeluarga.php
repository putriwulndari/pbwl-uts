<?php

namespace App;

use Inc\Koneksi as Koneksi;

class KartuKeluarga extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_kk INNER JOIN tb_penduduk ON tb_kk.kk_id_kepala=tb_penduduk.pen_id";
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
        $kk_id_kepala = $_POST['kk_id_kepala'];
        $kk_nonik = $_POST['kk_nonik'];
        $kk_alamat = $_POST['kk_alamat'];

        $sql = "INSERT INTO tb_kk (kk_id_kepala, kk_nonik, kk_alamat) VALUES (:kk_id_kepala, :kk_nonik, :kk_alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kk_id_kepala", $kk_id_kepala);
        $stmt->bindParam(":kk_nonik", $kk_nonik);
        $stmt->bindParam(":kk_alamat", $kk_alamat);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_kk INNER JOIN tb_penduduk ON tb_kk.kk_id_kepala=tb_penduduk.pen_id WHERE tb_kk.kk_id=:kk_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kk_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $kk_id_kepala = $_POST['kk_id_kepala'];
        $kk_nonik = $_POST['kk_nonik'];
        $kk_alamat = $_POST['kk_alamat'];
        $kk_id = $_POST['kk_id'];

        $sql = "UPDATE tb_kk SET kk_id_kepala=:kk_id_kepala, kk_nonik=:kk_nonik, kk_alamat=:kk_alamat WHERE kk_id=:kk_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kk_id_kepala", $kk_id_kepala);
        $stmt->bindParam(":kk_nonik", $kk_nonik);
        $stmt->bindParam(":kk_alamat", $kk_alamat);
        $stmt->bindParam(":kk_id", $kk_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_kk WHERE kk_id=:kk_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kk_id", $id);
        $stmt->execute();

    }
}