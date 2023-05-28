<?php

namespace App;

use Inc\Koneksi as Koneksi;

class Penduduk extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_penduduk";
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
        $pen_nik = $_POST['pen_nik'];
        $pen_nama = $_POST['pen_nama'];
        $pen_agama = $_POST['pen_agama'];
        $pen_kelamin = $_POST['pen_kelamin'];
        $pen_pekerjaan = $_POST['pen_pekerjaan'];
        $pen_kawin = $_POST['pen_kawin'];

        $sql = "INSERT INTO tb_penduduk (pen_nik, pen_nama, pen_agama, pen_kelamin, pen_pekerjaan, pen_kawin) VALUES (:pen_nik, :pen_nama, :pen_agama, :pen_kelamin, :pen_pekerjaan, :pen_kawin)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pen_nik", $pen_nik);
        $stmt->bindParam(":pen_nama", $pen_nama);
        $stmt->bindParam(":pen_agama", $pen_agama);
        $stmt->bindParam(":pen_kelamin", $pen_kelamin);
        $stmt->bindParam(":pen_pekerjaan", $pen_pekerjaan);
        $stmt->bindParam(":pen_kawin", $pen_kawin);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_penduduk WHERE pen_id=:pen_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pen_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $pen_nik = $_POST['pen_nik'];
        $pen_nama = $_POST['pen_nama'];
        $pen_agama = $_POST['pen_agama'];
        $pen_kelamin = $_POST['pen_kelamin'];
        $pen_pekerjaan = $_POST['pen_pekerjaan'];
        $pen_kawin = $_POST['pen_kawin'];
        $pen_id = $_POST['pen_id'];

        $sql = "UPDATE tb_penduduk SET pen_nik=:pen_nik, pen_nama=:pen_nama, pen_agama=:pen_agama, pen_kelamin=:pen_kelamin, pen_pekerjaan=:pen_pekerjaan, pen_kawin=:pen_kawin WHERE pen_id=:pen_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pen_nik", $pen_nik);
        $stmt->bindParam(":pen_nama", $pen_nama);
        $stmt->bindParam(":pen_agama", $pen_agama);
        $stmt->bindParam(":pen_kelamin", $pen_kelamin);
        $stmt->bindParam(":pen_pekerjaan", $pen_pekerjaan);
        $stmt->bindParam(":pen_kawin", $pen_kawin);
        $stmt->bindParam(":pen_id", $pen_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_penduduk WHERE pen_id=:pen_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pen_id", $id);
        $stmt->execute();

    }
}