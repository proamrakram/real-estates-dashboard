<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\City;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            PermissionSeeder::class,
            CitySeeder::class,
            NeighborhoodSeeder::class,
            PropertyTypeSeeder::class,
            OfferTypeSeeder::class,
            PropertyStatusSeeder::class,
            PriceTypeSeeder::class,
            StreetSeeder::class,
            DirectionSeeder::class,
            LicensedSeeder::class,
            LandSeeder::class,
            LandTypeSeeder::class,
            BranchSeeder::class,
            MediatorSeeder::class,
            DesireToBuySeeder::class,
            PurchaseMethodSeeder::class,
            CustomerSeeder::class,
            OrderStatusSeeder::class,
            OrderSeeder::class,
            OrderNoteSeeder::class,
            OrderNoteStatuseSeeder::class

        ]);
    }
}
