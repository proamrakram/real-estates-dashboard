<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 0;

        while ($count < 100) {
            $count = $count + 1;
            DB::table('customers')->insert([
                'user_id' => random_int(1, 100),
                'name' => Str::random(7),
                'phone' => '059' . random_int(1111111, 9999999),
                'email' => 'customer' . $count . '@gmail.com',
                'employer_id' => random_int(1, 6),
                'employer_name' => Str::random(7),
                'nationality_id' => random_int(111111111, 999999999),
                // 'NID',
                'city_id' =>  random_int(1, 6),
                'building_number' =>  random_int(3000, 6000),
                'street_name' => Str::random(7),
                'neighborhood_name' => Str::random(7),
                'zip_code' =>  random_int(3000, 6000),
                'addtional_number' => random_int(3000, 6000),
                'unit_number' =>  random_int(3000, 6000),
                'support_eskan' => 1,
                'employee_type' => 'public',
                'status' => 1,
                'who_add' => 1,
                // 'who_edit',
                'created_at' => now(),
            ]);
        }
    }
}
