<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches_ids = getBranches()->pluck('id')->toArray();

        #Super Admin
        DB::table('users')->insert([
            'name' => 'proamrakram',
            'phone' =>  '0599916672',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456789'),
            'user_status' => 'active',
            'branches_ids' => json_encode([1, 2, 3]),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'user_type' => 'superadmin',
            'created_at' => now(),
        ]);

        #Admin
        DB::table('users')->insert([
            'name' => 'proamrakram',
            'phone' =>  '0569062255',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'user_status' => 'active',
            'branches_ids' => json_encode([1, 2, 3]),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'user_type' => 'admin',
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'proamrakram',
            'phone' =>  '0569916672',
            'email' => 'office@gmail.com',
            'password' => Hash::make('123456789'),
            'user_status' => 'active',
            'branches_ids' => json_encode([1, 2, 3]),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'user_type' => 'office',
            'created_at' => now(),
        ]);


        DB::table('users')->insert([
            'name' => 'proamrakram',
            'phone' =>  '0599916638',
            'email' => 'marketer@gmail.com',
            'password' => Hash::make('123456789'),
            'user_status' => 'active',
            'branches_ids' => json_encode([1, 2, 3]),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'user_type' => 'marketer',
            'created_at' => now(),
        ]);


        $users_types = [
            1 => 'admin',
            2 => 'marketer',
            3 => 'office'
        ];

        $count = 0;

        while ($count < 100) {
            $user_type = $users_types[random_int(1, 3)];

            $count = $count + 1;

            DB::table('users')->insert([
                'name' => Str::random(7),
                'phone' =>  '059' . random_int(1111111, 9999999),
                'email' => $user_type . $count . '@gmail.com',
                'password' => Hash::make('123456789'),
                'user_status' => 'active',
                'branches_ids' => json_encode([1, 2, 3]),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'user_type' => $user_type,
                'created_at' => now(),
            ]);
        }
    }
}
