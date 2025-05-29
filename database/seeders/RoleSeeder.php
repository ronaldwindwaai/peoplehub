<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles
        $roles = [
            [
                'name' => 'admin',
                'description' => 'Administrator with full access'
            ],
            [
                'name' => 'hr',
                'description' => 'Human Resources staff'
            ],
            [
                'name' => 'finance',
                'description' => 'Finance department staff'
            ],
            [
                'name' => 'programme-officer',
                'description' => 'Programme management staff'
            ],
            [
                'name' => 'sg',
                'description' => 'Secretary General'
            ],
            [
                'name' => 'user',
                'description' => 'Regular user with basic access'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        // Create admin user if not exists
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'password' => bcrypt('password'),
                'status' => 1,
                'system_reserve' => 1
            ]
        );
        $admin->assignRole('admin');

        // Create default user if not exists
        $user = User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'first_name' => 'Default',
                'last_name' => 'User',
                'password' => bcrypt('password'),
                'status' => 1
            ]
        );
        $user->assignRole('user');
    }
}
