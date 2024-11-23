<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Tabel t_jabatan
        Schema::create('t_jabatan', function (Blueprint $table) {
            $table->id();
            $table->string('kd_jabatan');
            $table->string('ur_jabatan');
            $table->string('level');
            $table->timestamps();
            $table->index('kd_jabatan');
        });

        // Tabel users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->integer('nik')->unique();
            $table->string('kd_jabatan');
            $table->foreign('kd_jabatan')->references('kd_jabatan')->on('t_jabatan')->cascadeOnDelete();
            $table->string('alamat')->nullable();
            $table->string('nohp')->nullable();
            $table->string('noktp')->nullable();
            $table->integer('is_active')->default(1);
            $table->timestamps();
            $table->index('nik');
        });

        // Tabel auth_group
        Schema::create('auth_group', function (Blueprint $table) {
            $table->id();
            $table->string('ur_group');
        });

        // // Tabel auth_user_group
        Schema::create('auth_user_group', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->cascadeOnDelete();
            $table->foreignId('id_group')->constrained('auth_group')->cascadeOnDelete();
        });

        Schema::create('d_menu', function (Blueprint $table) {
            $table->id();
            $table->integer('kd_menu')->unique(); // Perhatikan unsigned di sini
            $table->integer('kd_parent')->nullable();
            $table->string('ur_menu');
            $table->string('color');
            $table->string('icon');
            $table->string('link');
            $table->integer('level');
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            $table->index(['kd_menu', 'kd_parent']);
        });

        // Tabel d_fileupload
        Schema::create('d_fileupload', function (Blueprint $table) {
            $table->id();
            $table->text('file_path');
            $table->text('file_name');
            $table->bigInteger('file_size')->nullable();
            $table->timestamp('uploaded_at')->nullable();
            $table->string('related_table')->nullable();
            $table->string('related_kd')->nullable();
            $table->integer('nik');
            $table->foreign('nik')->references('nik')->on('users')->cascadeOnDelete();
            $table->text('file_description')->nullable();
            $table->integer('is_active')->default(1);
        });

        // // Seeder untuk t_jabatan
        // DB::table('t_jabatan')->insertOrIgnore([
        //     ['kd_jabatan' => 'J001', 'ur_jabatan' => 'Manager', 'level' => '1', 'created_at' => Carbon::now()],
        //     ['kd_jabatan' => 'J002', 'ur_jabatan' => 'Staff', 'level' => '2', 'created_at' => Carbon::now()],
        // ]);

        // // Seeder untuk auth_group
        // DB::table('auth_group')->insertOrIgnore([
        //     ['ur_group' => 'Administrator'],
        //     ['ur_group' => 'User'],
        // ]);

        // // Seeder untuk d_menu
        // DB::table('d_menu')->insertOrIgnore([
        //     ['kd_menu' => 1, 'kd_parent' => 0, 'ur_menu' => 'Dashboard', 'color' => 'blue', 'icon' => 'dashboard', 'link' => '/dashboard', 'level' => 1, 'is_active' => 1, 'created_at' => Carbon::now()],
        //     ['kd_menu' => 2, 'kd_parent' => 1, 'ur_menu' => 'Settings', 'color' => 'green', 'icon' => 'settings', 'link' => '/settings', 'level' => 2, 'is_active' => 1, 'created_at' => Carbon::now()],
        // ]);

        // // Seeder untuk users
        // DB::table('users')->insertOrIgnore([
        //     [
        //         'name' => 'Admin User',
        //         'username' => 'admin',
        //         'email' => 'admin@example.com',
        //         'password' => bcrypt('password'),
        //         'nik' => 1234567890,
        //         'kd_jabatan' => 'J001',
        //         'alamat' => 'Jl. Contoh No. 1',
        //         'nohp' => '081234567890',
        //         'ktp' => '987654321',
        //         'is_active' => 1,
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        // ]);

        // // Seeder untuk d_fileupload
        // DB::table('d_fileupload')->insertOrIgnore([
        //     [
        //         'file_path' => '/uploads/sample1.pdf',
        //         'file_name' => 'sample1.pdf',
        //         'file_type' => 'application/pdf',
        //         'file_size' => 1024,
        //         'uploaded_at' => Carbon::now(),
        //         'related_table' => 'users',
        //         'related_kd' => '1234567890',
        //         'nik' => 1234567890,
        //         'file_description' => 'Contoh file upload',
        //         'is_active' => 1,
        //     ],
        // ]);
    }

    public function down()
    {
        Schema::dropIfExists('d_fileupload');
        Schema::dropIfExists('users');
        Schema::dropIfExists('d_menu');
        Schema::dropIfExists('auth_group_menu');
        Schema::dropIfExists('auth_user_group');
        Schema::dropIfExists('auth_group');
        Schema::dropIfExists('t_jabatan');
    }
};
