<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $branches = [
        //     'RYD' => 'فرع الرياض',
        //     'QTF' => 'فرع القطيف',
        //     'TRT' => 'فرع تاروت'
        // ];

        $x = 1;

        while ($x < 100) {
            DB::table('branches')->insert([
                'name' => Str::random(6),
                'code' => Str::random(5),
                'city_id' => random_int(1, 6)
            ]);

            $x = $x + 1;
        }

        // foreach ($branches as $code => $branch) {

        //     DB::table('branches')->insert([
        //         'name' => $branch,
        //         'code' => $code,
        //         'city_id' => $x
        //     ]);

        //     $x = $x + 1;
        // }
    }
}
