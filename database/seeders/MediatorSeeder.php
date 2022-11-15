<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'شركة الميثاق الذهبي',
            'شركة الوسام',
            'شركة علوش كوم',
        ];

        foreach ($names as $name) {
            DB::table('mediators')->insert([
                'user_id' => 1,
                'name' => $name,
                'phone_number' => '059' . random_int(1111111, 9999999),
                'is_direct' => random_int(1, 2),
                'status' => random_int(1, 2),
                'created_at' => now(),
            ]);
        }
    }
}
