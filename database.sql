CREATE TABLE tb_penyewa (
    pen_id INT(11) NOT NULL AUTO_INCREMENT,
    pen_nama VARCHAR(100) NOT NULL,
    pen_telp VARCHAR(20) NOT NULL,
    PRIMARY KEY(pen_id)
);
 
CREATE TABLE tb_kost (
    kost_id INT(11) NOT NULL AUTO_INCREMENT,
    kost_kamar VARCHAR(11) NOT NULL,
    kost_text TEXT DEFAULT NULL,
    PRIMARY KEY(kost_id),
    UNIQUE KEY(kost_kamar)
);

CREATE TABLE tb_harga (
    hrg_id INT(11) NOT NULL AUTO_INCREMENT,
    hrg_waktu VARCHAR(20) NOT NULL,
    hrg_harga TEXT DEFAULT NULL,
    PRIMARY KEY(hrg_id),
    UNIQUE KEY(hrg_waktu)
);

CREATE TABLE tb_kontrak (
    ktr_id INT(11) NOT NULL AUTO_INCREMENT,
    ktr_id_penyewa INT(11) NOT NULL,
    ktr_id_kost INT(11) NOT NULL,
    ktr_id_harga INT(11) NOT NULL,
    ktr_masuk DATE NOT NULL,
    ktr_keluar DATE NOT NULL,
    PRIMARY KEY(ktr_id),
    FOREIGN KEY(ktr_id_penyewa) REFERENCES tb_penyewa(pen_id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(ktr_id_harga) REFERENCES tb_harga(hrg_id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(ktr_id_kost) REFERENCES tb_kost(kost_id) ON UPDATE CASCADE ON DELETE RESTRICT
);