<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nehoods = [
            1 =>   'الصناعية',
            2  =>  'سنابس',
            3  =>  'الفتح',
            4  =>  'اليمامة',
            5  =>  'الجبل',
            6  =>  'الجامعيين',
            7  =>  'الجوهرة',
            8  =>  'المروج',
            9  =>  'الروضة',
            10 =>  'النرجس',
            11 =>  'الصدفة',
            12 =>  'الساحل',
            13 =>  'الاندلس',
            14 =>  'الزمرد',
            15 =>  'الزور',
            16 =>  'النخيل',
            17 =>  'الربيعية',
            18 =>  'الصواري',
            19 =>  'الديرة',
            20 =>  'الرضا',
            21 =>  'الشاطىء',
            22 =>  'المدارس',
            23 =>  'الورود',
            24 =>  'المناخ',
            25 =>  'المرجان',
        ];

        foreach ($nehoods as $nehood) {
            DB::table('neighborhoods')->insert([
                'city_id' => 2,
                'name' => $nehood,
            ]);
        }
    }
}
