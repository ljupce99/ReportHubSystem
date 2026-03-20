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
        User::updateOrCreate(
            ['email' => 'admin@company.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'department' => 'IT',
                'is_active' => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'manager@company.com'],
            [
                'name' => 'Jane Manager',
                'password' => Hash::make('password'),
                'role' => 'manager',
                'department' => 'HR',
                'is_active' => true,
            ]
        );

        foreach (range(1, 10) as $i) {
            User::updateOrCreate(
                ['email' => "employee{$i}@company.com"],
                [
                    'name' => "Employee {$i}",
                    'password' => Hash::make('password'),
                    'role' => 'employee',
                    'department' => ['Engineering', 'HR', 'Sales', 'Finance', 'IT'][array_rand([0, 1, 2, 3, 4])],
                    'is_active' => true,
                ]
            );
        }

        $categories = [
            ['name' => 'General', 'color' => '#6366f1'],
            ['name' => 'HR', 'color' => '#10b981'],
            ['name' => 'IT', 'color' => '#3b82f6'],
            ['name' => 'Events', 'color' => '#f59e0b'],
            ['name' => 'Policy', 'color' => '#ef4444'],
            ['name' => 'Urgent', 'color' => '#dc2626'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(
                ['name' => $cat['name']],
                ['color' => $cat['color'], 'is_active' => true]
            );
        }
    }
}
