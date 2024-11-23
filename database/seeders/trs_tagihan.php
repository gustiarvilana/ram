<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class trs_tagihan extends Seeder
{
    public function run()
    {
        // Membuat tabel t_channel
        DB::statement("CREATE TABLE IF NOT EXISTS t_channel (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                kd_channel VARCHAR(255) NOT NULL,
                ur_channel VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                INDEX (kd_channel)
            )
        ");

        // Buat tabel t_sts_tagihan
        DB::statement("CREATE TABLE IF NOT EXISTS t_sts_tagihan (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                kd_sts INT,
                ur_sts VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX (kd_sts)
            )
        ");

        DB::statement("CREATE TABLE IF NOT EXISTS d_tagihan (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                kd_tagihan INT NOT NULL,
                nosp INT,
                id_sts_penjualan BIGINT,
                tgl_bayar INT,
                thn_bayar INT,
                nom_bayar INT,
                kd_channel VARCHAR(255),
                angs_ke INT,
                nik INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                INDEX (kd_tagihan),
                FOREIGN KEY (nosp) REFERENCES d_penjualan(nosp) ON DELETE CASCADE,
                FOREIGN KEY (id_sts_penjualan) REFERENCES d_sts_penjualan(id) ON DELETE CASCADE,
                FOREIGN KEY (kd_channel) REFERENCES t_channel(kd_channel) ON DELETE CASCADE,
                FOREIGN KEY (nik) REFERENCES users(nik) ON DELETE CASCADE
            )
        ");

        DB::statement("CREATE TABLE IF NOT EXISTS d_sts_tagihan (
                id BIGINT PRIMARY KEY AUTO_INCREMENT,
                id_tagihan BIGINT,
                kd_sts INT,
                catatan VARCHAR(255),
                is_read INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (id_tagihan) REFERENCES d_tagihan(id),
                FOREIGN KEY (kd_sts) REFERENCES t_sts_tagihan(kd_sts)
            );
        ");
    }
}
