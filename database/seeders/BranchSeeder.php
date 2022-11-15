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
        $branches = [
            'RYD' => 'فرع الرياض',
            'QTF' => 'فرع القطيف',
            'TRT' => 'فرع تاروت',
            'NBB' => 'بنك البحرين الوطني',
            'NBK' => 'بنك الكويت الوطني',
            'NBS' => 'البنك الوطني الباكستاني',
            'SBI' => 'بنك الدولة الهندي',
            'QNB' => 'بنك قطر الوطني',
            'FAB' => 'بنك ابو ظبي',
            'ABN' => 'البنك العربي',
        ];

        foreach ($branches as $code => $branch) {
            DB::table('branches')->insert([
                'name' => Str::random(6),
                'code' => ucwords($code),
                'city_id' => random_int(1, 6),
                'created_at' => now(),
            ]);
        }
    }
}
