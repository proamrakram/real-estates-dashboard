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
        DB::table('users')->insert([
            'name' => 'proamrakram',
            'phone' =>  '+972599916672',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            // 'user_type' => 'admin',
            'is_admin' => true,
            'is_office' => true,
            'is_monitor' => true,
            'user_status' => 'active',
            'can_add' => 1,
            'can_edit' => 1,
            'can_cancel' => 1,
            'can_show_all' => 1,
            'can_booking' => 1,
            'can_send_sms' => 1,
            // 'branch_ids',
            // 'hash_login',
            // 'hash_expire',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
