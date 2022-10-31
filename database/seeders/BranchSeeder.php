<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = [
            'RYD' => 'فرع الرياض',
            'QTF' => 'فرع القطيف',
            'TRT' => 'فرع تاروت'
        ];

        $x = 1;

        foreach ($branches as $code => $branch) {

            DB::table('branches')->insert([
                'name' => $branch,
                'code' => $code,
                'city_id' => $x
            ]);

            $x = $x + 1;
        }
    }
}
