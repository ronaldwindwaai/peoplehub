<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateUserCommand extends Command
{
    protected $signature = 'user:create {--admin : Create an admin user}';
    protected $description = 'Create a new user using the UserFactory';

    public function handle()
    {
        $isAdmin = $this->option('admin');
        if ($isAdmin) {
            $admin = User::where('email', 'admin@example.com')->first();
            if ($admin) {
                $this->info('Admin user already exists: ' . $admin->email);
                return;
            }
            $user = User::factory()->admin()->create();
            $user->assignRole('admin');
        } else {
            $first_name = $this->ask('Enter first name:');
            $last_name = $this->ask('Enter last name:');
            $email = $this->ask('Enter email:');
            $password = $this->secret('Enter password:');
            $user = User::create([
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => Hash::make($password),
                'status' => 1,
                'system_reserve' => 0,
            ]);
            $roles = Role::all()->pluck('name')->toArray();
            $role = $this->choice('Select role:', $roles);
            $user->assignRole($role);
        }
        $this->info('User created successfully: ' . $user->email);
    }
} 