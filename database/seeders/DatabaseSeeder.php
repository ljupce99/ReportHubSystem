<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        User::firstOrCreate(
            ['email' => 'admin@company.com'],
            [
                'name'       => 'Admin User',
                'password'   => Hash::make('password'),
                'role'       => 'admin',
                'department' => 'IT',
                'is_active'  => true,
            ]
        );

        // Manager
        User::firstOrCreate(
            ['email' => 'manager@company.com'],
            [
                'name'       => 'Jane Manager',
                'password'   => Hash::make('password'),
                'role'       => 'manager',
                'department' => 'HR',
                'is_active'  => true,
            ]
        );

        // 10 employees
        $departments = ['Engineering', 'HR', 'Sales', 'Finance', 'IT'];
        foreach (range(1, 10) as $i) {
            User::firstOrCreate(
                ['email' => "employee{$i}@company.com"],
                [
                    'name'       => "Employee {$i}",
                    'password'   => Hash::make('password'),
                    'role'       => 'employee',
                    'department' => $departments[array_rand($departments)],
                    'is_active'  => true,
                ]
            );
        }

        // Categories
        $categories = [
            ['name' => 'General', 'color' => '#6366f1'],
            ['name' => 'HR',      'color' => '#10b981'],
            ['name' => 'IT',      'color' => '#3b82f6'],
            ['name' => 'Events',  'color' => '#f59e0b'],
            ['name' => 'Policy',  'color' => '#ef4444'],
            ['name' => 'Urgent',  'color' => '#dc2626'],
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(
                ['name' => $cat['name']],
                [...$cat, 'is_active' => true]
            );
        }
    }
}
