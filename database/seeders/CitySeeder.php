<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'RYD' => 'الرياض',
            'QTF' =>  'القطيف',
            'TRT' =>  'جزيرة تاروت'
        ];

        foreach ($cities as $code => $city) {

            DB::table('cities')->insert([
                'name' => $city,
                'code' => $code
            ]);
        }
    }
}
