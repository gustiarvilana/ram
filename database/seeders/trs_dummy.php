<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class trs_dummy extends Seeder
{
    public function run()
    {
        // Seeder untuk tabel t_jabatan
        DB::table('t_jabatan')->insert([
            [
                'kd_jabatan' => 1,
                'ur_jabatan' => 'Manager',
                'level'      => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kd_jabatan' => 2,
                'ur_jabatan' => 'Staff',
                'level'      => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567890,
                'kd_jabatan' => '1', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 1',
                'nohp' => '081234567890',
                'noktp' => '987654321',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User ',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567891,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 2',
                'nohp' => '081234567891',
                'noktp' => '987654322',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User  3',
                'username' => 'user3',
                'email' => 'user3@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567892,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 3',
                'nohp' => '081234567892',
                'noktp' => '987654323',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User  4',
                'username' => 'user4',
                'email' => 'user4@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567893,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 4',
                'nohp' => '081234567893',
                'noktp' => '987654324',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User  5',
                'username' => 'user5',
                'email' => 'user5@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567894,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 5',
                'nohp' => '081234567894',
                'noktp' => '987654325',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User  6',
                'username' => 'user6',
                'email' => 'user6@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567895,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 6',
                'nohp' => '081234567895',
                'noktp' => '987654326',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User  7',
                'username' => 'user7',
                'email' => 'user7@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567896,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => ' Jl. Contoh No. 7',
                'nohp' => '081234567896',
                'noktp' => '987654327',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User   8',
                'username' => 'user8',
                'email' => 'user8@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567897,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 8',
                'nohp' => '081234567897',
                'noktp' => '987654328',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User   9',
                'username' => 'user9',
                'email' => 'user9@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567898,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 9',
                'nohp' => '081234567898',
                'noktp' => '987654329',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User   10',
                'username' => 'user10',
                'email' => 'user10@example.com',
                'password' => bcrypt('password'), // Password yang di-hash
                'nik' => 1234567899,
                'kd_jabatan' => '2', // Pastikan jabatan ini sudah ada di t_jabatan
                'alamat' => 'Jl. Contoh No. 10',
                'nohp' => '081234567899',
                'noktp' => '987654330',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('auth_group')->insert([
            ['ur_group' => 'Administrator'],
            ['ur_group' => 'User '],
        ]);
        DB::table('auth_user_group')->insert([
            ['id_user' => 1, 'id_group' => 1], // Admin in Administrator group
            ['id_user' => 1, 'id_group' => 2], // Admin in User group
            ['id_user' => 2, 'id_group' => 2], // User in User group
        ]);
        DB::table('d_menu')->insert([
            [
                'kd_menu' => 1,
                'kd_parent' => 0,
                'ur_menu' => 'Dashboard',
                'color' => 'blue',
                'icon' => 'dashboard',
                'link' => '/dashboard',
                'level' => 1,
                'is_active' => 1
            ],
            [
                'kd_menu' => 2,
                'kd_parent' => 1,
                'ur_menu' => 'Settings',
                'color' => 'green',
                'icon' => 'settings',
                'link' => '/settings',
                'level' => 2,
                'is_active' => 1
            ],
        ]);
        DB::table('d_fileupload')->insert([
            [
                'file_path' => '/uploads/sample1.pdf',
                'file_name' => 'sample1.pdf',
                'file_size' => 1024,
                'uploaded_at' => now(),
                'related_table' => 'users',
                'related_kd' => '1234567890',
                'nik' => 1234567890,
                'file_description' => 'Contoh file upload',
                'is_active' => 1,
            ],
        ]);


        DB::table('t_produk')->insert([
            [
                'kd_produk' => '1',
                'ur_produk' => 'Produk 1',
            ],
            [
                'kd_produk' => '2',
                'ur_produk' => 'Produk 1',
            ],
        ]);
        DB::table('d_harga')->insert([
            [
                'kd_harga' => '1',
                'ur_harga' => 'harga 1',
                'related_kd' => '1',
                'nominal' => 10000,
            ],
            [
                'kd_harga' => '2',
                'ur_harga' => 'harga 2',
                'related_kd' => '1',
                'nominal' => 20000,
            ],
            [
                'kd_harga' => '3',
                'ur_harga' => 'harga 3',
                'related_kd' => '2',
                'nominal' => 15000,
            ],
        ]);
        DB::table('t_sts_penjualan')->insert([
            [
                'kd_sts' => '1',
                'ur_sts' => 'Cash',
            ],
            [
                'kd_sts' => '2',
                'ur_sts' => 'Credit Aktif',
            ],
            [
                'kd_sts' => '3',
                'ur_sts' => 'Credit Lunas',
            ],
            [
                'kd_sts' => '4',
                'ur_sts' => 'Tolak',
            ],
        ]);
        DB::table('t_lokasi')->insert([
            [
                'kd_kel' => 101,
                'kd_kec' => 101,
                'kd_kota' => 101,
                'kd_prov' => 32, // Kode Provinsi Jawa Barat
                'ur_kel' => 'Kelurahan Cikole',
                'ur_kec' => 'Kecamatan Cikole',
                'ur_kota' => 'Kota Sukabumi',
                'ur_prov' => 'Jawa Barat',
            ],
            [
                'kd_kel' => 102,
                'kd_kec' => 101,
                'kd_kota' => 101,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Warudoyong',
                'ur_kec' => 'Kecamatan Warudoyong',
                'ur_kota' => 'Kota Sukabumi',
                'ur_prov' => 'Jawa Barat',
            ],
            [
                'kd_kel' => 201,
                'kd_kec' => 201,
                'kd_kota' => 201,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Andir',
                'ur_kec' => 'Kecamatan Andir',
                'ur_kota' => 'Kota Bandung',
                'ur_prov' => 'Jawa Barat',
            ],
            [
                'kd_kel' => 202,
                'kd_kec' => 201,
                'kd_kota' => 201,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Cibadak',
                'ur_kec' => 'Kecamatan Cibadak',
                'ur_kota' => 'Kota Bandung',
                'ur_prov' => 'Jawa Barat',
            ],
            [
                'kd_kel' => 301,
                'kd_kec' => 301,
                'kd_kota' => 301,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Kersanagara',
                'ur_kec' => 'Kecamatan Kersanagara',
                'ur_kota' => 'Kota Cirebon',
                'ur_prov' => 'Jawa Barat',
            ],
            [
                'kd_kel' => 302,
                'kd_kec' => 301,
                'kd_kota' => 301,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Kebon Pelok',
                'ur_kec' => 'Kecamatan Kebon Pelok',
                'ur_kota' => 'Kota Cirebon',
                'ur_prov' => 'Jawa Barat',
            ],
            [
                'kd_kel' => 401,
                'kd_kec' => 401,
                'kd_kota' => 401,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Pahlawan',
                'ur_kec' => 'Kecamatan Pahlawan',
                'ur_kota' => 'Kota Bogor',
                'ur_prov' => 'Jawa Barat',
            ],
            [
                'kd_kel' => 402,
                'kd_kec' => 401,
                'kd_kota' => 401,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Sempur',
                'ur_kec' => 'Kecamatan Sempur',
                'ur_kota' => 'Kota Bogor',
                'ur_prov' => 'Jawa Barat',
            ],
            [
                'kd_kel' => 501,
                'kd_kec' => 501,
                'kd_kota' => 501,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Kertajaya',
                'ur_kec' => 'Kecamatan Kertajaya',
                'ur_kota' => 'Kota Depok',
                'ur_prov' => 'J awa Barat',
            ],
            [
                'kd_kel' => 502,
                'kd_kec' => 501,
                'kd_kota' => 501,
                'kd_prov' => 32,
                'ur_kel' => 'Kelurahan Cisalak',
                'ur_kec' => 'Kecamatan Cisalak',
                'ur_kota' => 'Kota Depok',
                'ur_prov' => 'Jawa Barat',
            ],
        ]);
        DB::table('d_penjualan')->insert([
            [
                'nosp'          => '1209371',
                'tgl_penjualan' => '20231001',
                'nama_customer' => 'John Doe',
                'kd_kel'        => 501,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,                         // Kode Provinsi Jawa Barat
                'alamat'        => 'Jl. Contoh No.1, Depok',
                'nohp'          => '081234567890',
                'is_koord'      => '1',
                'total_harga'   => 1000000,
                'sisa_bayar'    => 500000,
                'dp'            => 500000,
                'kd_tagih'      => 'L',
                'nik'           => '1234567890', // Sesuaikan dengan nik Admin
            ],
            [
                'nosp'          => '1209372',
                'tgl_penjualan' => '20231002',
                'nama_customer' => 'Jane Smith',
                'kd_kel'        => 502,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.2, Depok',
                'nohp'          => '082345678901',
                'is_koord'      => '1',
                'total_harga'   => 1500000,
                'sisa_bayar'    => 750000,
                'dp'            => 750000,
                'kd_tagih'      => 'P1',
                'nik'           => '1234567891', // Ses uaikan dengan nik User 1
            ],
            [
                'nosp'          => '1209373',
                'tgl_penjualan' => '20231003',
                'nama_customer' => 'Michael Johnson',
                'kd_kel'        => 501,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.3, Depok',
                'nohp'          => '083456789012',
                'is_koord'      => '1',
                'total_harga'   => 2000000,
                'sisa_bayar'    => 1000000,
                'dp'            => 1000000,
                'kd_tagih'      => 'L',
                'nik'           => '1234567892', // Sesuaikan dengan nik User 2
            ],
            [
                'nosp'          => '1209374',
                'tgl_penjualan' => '20231004',
                'nama_customer' => 'Emily Davis',
                'kd_kel'        => 501,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.4, Depok',
                'nohp'          => '084567890123',
                'is_koord'      => '1',
                'total_harga'   => 1200000,
                'sisa_bayar'    => 600000,
                'dp'            => 600000,
                'kd_tagih'      => 'P2',
                'nik'           => '1234567893', // Sesuaikan dengan nik User 3
            ],
            [
                'nosp'          => '1209375',
                'tgl_penjualan' => '20231005',
                'nama_customer' => 'David Wilson',
                'kd_kel'        => 501,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.5, Depok',
                'nohp'          => '085678901234',
                'is_koord'      => '1',
                'total_harga'   => 1800000,
                'sisa_bayar'    => 900000,
                'dp'            => 900000,
                'kd_tagih'      => 'L',
                'nik'           => '1234567894', // Sesuaikan dengan nik User 4
            ],
            [
                'nosp'          => '1209376',
                'tgl_penjualan' => '20231006',
                'nama_customer' => 'Sophia Brown',
                'kd_kel'        => 501,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.6, Depok',
                'nohp'          => '086789012345',
                'is_koord'      => '1',
                'total_harga'   => 2200000,
                'sisa_bayar'    => 1100000,
                'dp'            => 1100000,
                'kd_tagih'      => 'L',
                'nik'           => '1234567895', // Sesuaikan dengan nik User 5
            ],
            [
                'nosp'          => '1209377',
                'tgl_penjualan' => '20231007',
                'nama_customer' => 'James Miller',
                'kd_kel'        => 501,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.7, Depok',
                'nohp'          => '087890123456',
                'is_koord'      => '1',
                'total_harga'   => 2500000,
                'sisa_bayar'    => 1250000,
                'dp'            => 1250000,
                'kd_tagih'      => 'P2',
                'nik'           => '1234567896', // Sesuaikan dengan nik User 6
            ],
            [
                'nosp'          => '1209378',
                'tgl_penjualan' => '20231008',
                'nama_customer' => 'Isabella Garcia',
                'kd_kel'        => 501,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.8, Depok',
                'nohp'          => '088901234567',
                'is_koord'      => '1',
                'total_harga'   => 3000000,
                'sisa_bayar'    => 1500000,
                'dp'            => 1500000,
                'kd_tagih'      => 'L',
                'nik'           => '1234567897', // Sesuaikan dengan nik User 7
            ],
            [
                'nosp'          => '1209379',
                'tgl_penjualan' => '20231009',
                'nama_customer' => 'Liam Martinez',
                'kd_kel'        => 501,                        // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                        // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                        // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.9, Depok',
                'nohp'          => '089012345678',
                'is_koord'      => '1',
                'total_harga'   => 3500000,
                'sisa_bayar'    => 1750000,
                'dp'            => 1750000,
                'kd_tagih'      => 'A1',
                'nik'           => '1234567898', // Sesuaikan dengan nik User 8
            ],
            [
                'nosp'          => '1209380',
                'tgl_penjualan' => '20231010',
                'nama_customer' => 'Mia Hernandez',
                'kd_kel'        => 501,                         // Sesuaikan dengan kode kelurahan dari t_lokasi
                'kd_kec'        => 501,                         // Sesuaikan dengan kode kecamatan dari t_lokasi
                'kd_kota'       => 501,                         // Sesuaikan dengan kode kota dari t_lokasi
                'kd_prov'       => 32,
                'alamat'        => 'Jl. Contoh No.10, Depok',
                'nohp'          => '090123456789',
                'is_koord'      => '1',
                'total_harga'   => 4000000,
                'sisa_bayar'    => 2000000,
                'dp'            => 2000000,
                'kd_tagih'      => 'L',
                'nik'           => '1234567899', // Sesuaikan dengan nik User 9
            ],
        ]);
        DB::table('d_penjualan_detail')->insert([
            [
                'id_penjualan' => 1, // Mengacu pada nosp '1209371'
                'kd_produk'    => '1', // Mengacu pada produk 'Produk 1'
                'qty'          => 1,
            ],
            [
                'id_penjualan' => 1, // Mengacu pada nosp '1209371'
                'kd_produk'    => '2', // Mengacu pada produk 'Produk 2'
                'qty'          => 2,
            ],
            [
                'id_penjualan' => 2, // Mengacu pada nosp '1209372'
                'kd_produk'    => '1', // Mengacu pada produk 'Produk 1'
                'qty'          => 1,
            ],
            [
                'id_penjualan' => 2, // Mengacu pada nosp '1209372'
                'kd_produk'    => '2', // Mengacu pada produk 'Produk 2'
                'qty'          => 3,
            ],
            [
                'id_penjualan' => 3, // Mengacu pada nosp '1209373'
                'kd_produk'    => '1', // Mengacu pada produk 'Produk 1'
                'qty'          => 2,
            ],
            [
                'id_penjualan' => 4, // Mengacu pada nosp '1209374'
                'kd_produk'    => '2', // Mengacu pada produk 'Produk 2'
                'qty'          => 1,
            ],
            [
                'id_penjualan' => 5, // Mengacu pada nosp '1209375'
                'kd_produk'    => '1', // Mengacu pada produk 'Produk 1'
                'qty'          => 3,
            ],
            [
                'id_penjualan' => 6, // Mengacu pada nosp '1209376'
                'kd_produk'    => '2', // Mengacu pada produk 'Produk 2'
                'qty'          => 2,
            ],
            [
                'id_penjualan' => 7, // Mengacu pada nosp '1209377'
                'kd_produk'    => '1', // Mengacu pada produk 'Produk 1'
                'qty'          => 1,
            ],
            [
                'id_penjualan' => 8, // Mengacu pada nosp '1209378'
                'kd_produk'    => '2', // Mengacu pada produk 'Produk 2'
                'qty'          => 4,
            ],
            [
                'id_penjualan' => 9, // Mengacu pada nosp '1209379'
                'kd_produk'    => '1', // Mengacu pada produk 'Produk 1'
                'qty'          => 2,
            ],
            [
                'id_penjualan' => 10, // Mengacu pada nosp '1209380'
                'kd_produk'    => '2', // Mengacu pada produk 'Produk 2'
                'qty'          => 1,
            ],
        ]);
        DB::table('d_sts_penjualan')->insert([
            [
                'id_penjualan' => 1, // Mengacu pada nosp '1209371'
                'kd_sts'       => 1, // Misalkan 1 adalah status "Lunas"
                'catatan'      => 'Pembayaran telah diterima.',
                'is_read'      => 1,
            ],
            [
                'id_penjualan' => 2, // Mengacu pada nosp '1209372'
                'kd_sts'       => 2, // Misalkan 2 adalah status "Belum Lunas"
                'catatan'      => 'Menunggu pembayaran.',
                'is_read'      => 0,
            ],
            [
                'id_penjualan' => 3, // Mengacu pada nosp '1209373'
                'kd_sts'       => 1, // Status "Lunas"
                'catatan'      => 'Pembayaran telah diterima.',
                'is_read'      => 1,
            ],
            [
                'id_penjualan' => 4, // Mengacu pada nosp '1209374'
                'kd_sts'       => 2, // Status "Belum Lunas"
                'catatan'      => 'Menunggu pembayaran.',
                'is_read'      => 0,
            ],
            [
                'id_penjualan' => 5, // Mengacu pada nosp '1209375'
                'kd_sts'       => 1, // Status "Lunas"
                'catatan'      => 'Pembayaran telah diterima.',
                'is_read'      => 1,
            ],
            [
                'id_penjualan' => 6, // Mengacu pada nosp '1209376'
                'kd_sts'       => 1, // Status "Lunas"
                'catatan'      => 'Pembayaran telah diterima.',
                'is_read'      => 1,
            ],
            [
                'id_penjualan' => 7, // Mengacu pada nosp '1209377'
                'kd_sts'       => 2, // Status "Belum Lunas"
                'catatan'      => 'Menunggu pembayaran.',
                'is_read'      => 0,
            ],
            [
                'id_penjualan' => 8, // Mengacu pada nosp '1209378'
                'kd_sts'       => 1, // Status "Lunas"
                'catatan'      => 'Pembayaran telah diterima.',
                'is_read'      => 1,
            ],
            [
                'id_penjualan' => 9, // Mengacu pada nosp '1209379'
                'kd_sts'       => 2, // Status "Belum Lunas"
                'catatan'      => 'Menunggu pembayaran.',
                'is_read'      => 0,
            ],
            [
                'id_penjualan' => 10, // Mengacu pada nosp '1209380'
                'kd_sts'       => 1, // Status "Lunas"
                'catatan'      => 'Pembayaran telah diterima.',
                'is_read'      => 1,
            ],
        ]);


        DB::table('t_channel')->insert([
            [
                'kd_channel' => '1',
                'ur_channel' => 'Channel 1',
            ],
        ]);
        DB::table('t_channel')->insert([
            [
                'kd_channel' => '2',
                'ur_channel' => 'Channel 2',
            ],
        ]);
        DB::table('t_channel')->insert([
            [
                'kd_channel' => 'CH001',
                'ur_channel' => 'Channel 1',
                'created_at' => now(),
            ],
            [
                'kd_channel' => 'CH002',
                'ur_channel' => 'Channel 2',
                'created_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);

        DB::table('t_sts_tagihan')->insert([
            [
                'kd_sts' => 1,
                'ur_sts' => 'Tertagih',
            ],
            [
                'kd_sts' => 2,
                'ur_sts' => 'Approve CCC',
            ],
            [
                'kd_sts' => 3,
                'ur_sts' => 'Approve Regional',
            ],
            [
                'kd_sts' => 4,
                'ur_sts' => 'Dibatalkan CCC',
            ],
            [
                'kd_sts' => 5,
                'ur_sts' => 'Dibatalkan Regional',
            ],
        ]);
        DB::table('d_tagihan')->insert([
            [
                'kd_tagihan' => 1,
                'nosp'       => 1209371, // Mengacu pada d_penjualan
                'id_sts_penjualan' => 1, // Mengacu pada d_sts_penjualan
                'tgl_bayar' => 1,
                'thn_bayar' => 2023,
                'nom_bayar' => 1000000,
                'kd_channel' => 'CH001', // Sesuaikan dengan t_channel
                'angs_ke'   => 1,
                'nik'       => 1234567890, // Mengacu pada users
            ],
            [
                'kd_tagihan' => 2,
                'nosp'       => 1209372,
                'id_sts_penjualan' => 2,
                'tgl_bayar' => 2,
                'thn_bayar' => 2023,
                'nom_bayar' => 1500000,
                'kd_channel' => 'CH002', // Sesuaikan dengan t_channel
                'angs_ke'   => 1,
                'nik'       => 1234567891,
            ],
            [
                'kd_tagihan' => 3,
                'nosp'       => 1209373,
                'id_sts_penjualan' => 1,
                'tgl_bayar' => 3,
                'thn_bayar' => 2023,
                'nom_bayar' => 2000000,
                'kd_channel' => 'CH001', // Menggunakan CH001 untuk kesesuaian
                'angs_ke'   => 1,
                'nik'       => 1234567892,
            ],
        ]);
        DB::table('d_sts_tagihan')->insert([
            [
                'id_tagihan' => 1, // Mengacu pada d_tagihan
                'kd_sts'     => 1, // Mengacu pada t_sts_tagihan (Tertagih)
                'catatan'    => 'Tagihan telah tertagih.',
                'is_read'    => 1,
            ],
            [
                'id_tagihan' => 2, // Mengacu pada d_tagihan
                'kd_sts'     => 2, // Mengacu pada t_sts_tagihan (Approve CCC)
                'catatan'    => 'Tagihan sudah disetujui oleh CCC.',
                'is_read'    => 1,
            ],
            [
                'id_tagihan' => 3, // Mengacu pada d_tagihan
                'kd_sts'     => 3, // Mengacu pada t_sts_tagihan (Approve Regional)
                'catatan'    => 'Menunggu konfirmasi dari Regional.',
                'is_read'    => 0,
            ],
        ]);
    }
}
