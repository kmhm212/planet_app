<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planets')->insert([
            [
                'name' => '水星',
                'en_name' => 'MERCURY',
                'radius' => 2439,
                'weight' => 3310,
            ],
            [
                'name' => '金星',
                'en_name' => 'VENUS',
                'radius' => 6052,
                'weight' => 48700,
            ],
            [
                'name' => '地球',
                'en_name' => 'EARTH',
                'radius' => 6378,
                'weight' => 59760,
            ],
        ]);
    }
}
