<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(trs_penjualan::class);
        $this->call(trs_tagihan::class);
        $this->call(trs_dummy::class);
    }
}
