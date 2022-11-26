<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);

        DB::table('users')->truncate();

        // Create  root user
        User::create([
            'name' => 'root',
            'avatar' => '/images/girl.jpg',
            'email' => 'admin@bana.local',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 'root',
            'is_active' => true,
        ]);

        for ($i = 1; $i <= 20; $i++) {
            $admin = User::create([
                'name' => $faker->name(),
                'avatar' => '/images/girl.jpg',
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'is_active' => true,
            ]);
            for ($j = 1; $j <= 5; $j++) {
                User::create([
                    'name' => $faker->name(),
                    'avatar' => '/images/girl.jpg',
                    'email' => $faker->unique()->safeEmail(),
                    'email_verified_at' => now(),
                    'password' => Hash::make('12345678'),
                    'role' => 'sub_admin',
                    'admin_id' => $admin->id,
                    'is_active' => true
                ]);
            }
        }
    }
}
