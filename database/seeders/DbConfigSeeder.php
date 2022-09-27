<?php

namespace Database\Seeders;

use App\Models\DbConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DbConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DbConfig::factory()->count(1)->create();
    }
}
