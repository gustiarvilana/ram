<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class trs_penjualan extends Seeder
{
    public function run()
    {
        // Buat tabel t_produk
        DB::statement("CREATE TABLE IF NOT EXISTS t_produk (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                kd_produk VARCHAR(255) UNIQUE,
                ur_produk VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX (kd_produk)
            );
        ");
        DB::statement("CREATE TABLE IF NOT EXISTS d_harga (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                kd_harga VARCHAR(255) UNIQUE,
                ur_harga VARCHAR(255),
                related_kd VARCHAR(255),
                nominal INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX (kd_harga)
            );
        ");

        // Buat tabel t_sts_penjualan
        DB::statement("CREATE TABLE IF NOT EXISTS t_sts_penjualan (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                kd_sts INT,
                ur_sts VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX (kd_sts)
            );
        ");

        // Buat tabel t_lokasi
        DB::statement("CREATE TABLE IF NOT EXISTS t_lokasi (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                kd_kel INT,
                kd_kec INT,
                kd_kota INT,
                kd_prov INT,
                ur_kel VARCHAR(255),
                ur_kec VARCHAR(255),
                ur_kota VARCHAR(255),
                ur_prov VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX (kd_kel),
                INDEX (kd_kec),
                INDEX (kd_kota),
                INDEX (kd_prov)
            );
        ");

        // Buat tabel d_penjualan
        DB::statement("CREATE TABLE IF NOT EXISTS d_penjualan (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                nosp INT UNIQUE,
                tgl_penjualan INT,
                nama_customer VARCHAR(255),
                kd_kel INT,
                kd_kec INT,
                kd_kota INT,
                kd_prov INT,
                alamat VARCHAR(255),
                nohp VARCHAR(20),
                is_koord INT,
                total_harga INT,
                sisa_bayar INT,
                dp INT,
                kd_sts INT,
                kd_tagih VARCHAR(255),
                nik INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX (nosp),
                INDEX (kd_sts),
                INDEX (kd_tagih),
                FOREIGN KEY (kd_kel) REFERENCES t_lokasi(kd_kel),
                FOREIGN KEY (kd_kec) REFERENCES t_lokasi(kd_kec),
                FOREIGN KEY (kd_kota) REFERENCES t_lokasi(kd_kota),
                FOREIGN KEY (kd_prov) REFERENCES t_lokasi(kd_prov),
                FOREIGN KEY (nik) REFERENCES users(nik)
            );
        ");

        // Buat tabel d_penjualan_detail
        DB::statement("CREATE TABLE IF NOT EXISTS d_penjualan_detail (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                id_penjualan BIGINT,
                kd_produk VARCHAR(255),
                qty INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (id_penjualan) REFERENCES d_penjualan(id),
                FOREIGN KEY (kd_produk) REFERENCES t_produk(kd_produk)
            );
        ");

        // Buat tabel d_sts_penjualan
        DB::statement("CREATE TABLE IF NOT EXISTS d_sts_penjualan (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                id_penjualan BIGINT,
                kd_sts INT,
                catatan VARCHAR(255),
                is_read INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (id_penjualan) REFERENCES d_penjualan(id),
                FOREIGN KEY (kd_sts) REFERENCES t_sts_penjualan(kd_sts)
            );
        ");
    }
}
