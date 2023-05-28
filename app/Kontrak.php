<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Kontrak extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_kontrak as kontrak JOIN tb_penyewa as penyewa ON kontrak.ktr_id_penyewa=penyewa.pen_id JOIN tb_kost as kost ON kontrak.ktr_id_kost=kost.kost_id JOIN tb_harga as harga ON kontrak.ktr_id_harga=harga.hrg_id ORDER BY kost.kost_kamar ASC";
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
        var_dump($_POST);

        $ktr_id_penyewa = $_POST['ktr_id_penyewa'];
        $ktr_id_kost = $_POST['ktr_id_kost'];
        $ktr_id_harga = $_POST['ktr_id_harga'];
        $ktr_masuk = $_POST['ktr_masuk'];
        $ktr_keluar = $_POST['ktr_keluar'];

        $sql = "INSERT INTO tb_kontrak (ktr_id_penyewa, ktr_id_kost, ktr_id_harga, ktr_masuk, ktr_keluar) VALUES (:ktr_id_penyewa, :ktr_id_kost,:ktr_id_harga, :ktr_masuk, :ktr_keluar)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ktr_id_penyewa", $ktr_id_penyewa);
        $stmt->bindParam(":ktr_id_kost", $ktr_id_kost);
        $stmt->bindParam(":ktr_id_harga", $ktr_id_harga);
        $stmt->bindParam(":ktr_masuk", $ktr_masuk);
        $stmt->bindParam(":ktr_keluar", $ktr_keluar);
        $stmt->execute();

    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_kontrak as kontrak JOIN tb_penyewa as penyewa ON kontrak.ktr_id_penyewa=penyewa.pen_id JOIN tb_kost as kost ON kontrak.ktr_id_kost=kost.kost_id JOIN tb_harga as harga ON kontrak.ktr_id_harga=harga.hrg_id WHERE kontrak.ktr_id=:ktr_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ktr_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $ktr_id_penyewa = $_POST['ktr_id_penyewa'];
        $ktr_id_kost = $_POST['ktr_id_kost'];
        $ktr_id_harga = $_POST['ktr_id_harga'];
        $ktr_masuk = $_POST['ktr_masuk'];
        $ktr_keluar = $_POST['ktr_keluar'];
        $ktr_id = $_POST['ktr_id'];

        $sql = "UPDATE tb_kontrak  SET ktr_id_penyewa=:ktr_id_penyewa, ktr_id_kost=:ktr_id_kost, ktr_id_harga=:ktr_id_harga, ktr_masuk=:ktr_masuk, ktr_keluar=:ktr_keluar WHERE ktr_id=:ktr_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ktr_id_penyewa", $ktr_id_penyewa);
        $stmt->bindParam(":ktr_id_kost", $ktr_id_kost);
        $stmt->bindParam(":ktr_id_harga", $ktr_id_harga);
        $stmt->bindParam(":ktr_masuk", $ktr_masuk);
        $stmt->bindParam(":ktr_keluar", $ktr_keluar);
        $stmt->bindParam(":ktr_id", $ktr_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_kontrak WHERE ktr_id=:ktr_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ktr_id", $id);
        $stmt->execute();

    }
}