<?php

namespace Database\Seeders;

use App\Models\FormationCity;
use App\Models\FormationMonth;
use App\Models\PaymentMode;
use App\Models\SchoolFaculty;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $this->call([
            RoleSeeder::class,
            PaymentModeSeeder::class,
            CitySeeder::class,
            FormationCitySeeder::class,
            SchoolFacultySeeder::class,
            SchoolLevelSeeder::class,
            FormationLevelSeeder::class,
            FormationOptionSeeder::class,
            FormationMonthSeeder::class,
            FormationModeSeeder::class,
            UserRolePermissionSeeder::class,
        ]);
    }
}
