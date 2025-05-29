<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Database\Seeders\RoleSeeder;
use PHPUnit\Framework\Attributes\Test;

class RoleAndPermissionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Run migrations
        $this->artisan('migrate:fresh');
        
        // Run seeders
        $this->seed(RoleSeeder::class);
    }

    #[Test]
    public function it_can_create_all_required_roles()
    {
        $roles = Role::all();
        $this->assertCount(6, $roles);
        $this->assertTrue($roles->contains('name', 'admin'));
        $this->assertTrue($roles->contains('name', 'hr'));
        $this->assertTrue($roles->contains('name', 'finance'));
        $this->assertTrue($roles->contains('name', 'programme-officer'));
        $this->assertTrue($roles->contains('name', 'sg'));
        $this->assertTrue($roles->contains('name', 'user'));
    }

    #[Test]
    public function it_creates_admin_user_with_admin_role()
    {
        $admin = User::where('email', 'admin@example.com')->first();
        $this->assertNotNull($admin);
        $this->assertTrue($admin->hasRole('admin'));
    }

    #[Test]
    public function it_creates_default_user_with_user_role()
    {
        $user = User::where('email', 'user@example.com')->first();
        $this->assertNotNull($user);
        $this->assertTrue($user->hasRole('user'));
    }

    #[Test]
    public function new_user_registration_assigns_user_role()
    {
        $user = User::factory()->create();
        $this->assertTrue($user->hasRole('user'));
    }

    #[Test]
    public function roles_have_correct_descriptions()
    {
        $roles = Role::all();
        $this->assertEquals('Administrator with full access', $roles->firstWhere('name', 'admin')->description);
        $this->assertEquals('Human Resources staff', $roles->firstWhere('name', 'hr')->description);
        $this->assertEquals('Finance department staff', $roles->firstWhere('name', 'finance')->description);
        $this->assertEquals('Programme management staff', $roles->firstWhere('name', 'programme-officer')->description);
        $this->assertEquals('Secretary General', $roles->firstWhere('name', 'sg')->description);
        $this->assertEquals('Regular user with basic access', $roles->firstWhere('name', 'user')->description);
    }

    #[Test]
    public function user_can_have_multiple_roles()
    {
        $user = User::factory()->create();
        $user->assignRole(['hr', 'finance']);
        $this->assertTrue($user->hasRole('hr'));
        $this->assertTrue($user->hasRole('finance'));
    }

    #[Test]
    public function user_can_remove_roles()
    {
        $user = User::factory()->create();
        $user->assignRole(['hr', 'finance']);
        $user->removeRole('hr');
        $this->assertFalse($user->hasRole('hr'));
        $this->assertTrue($user->hasRole('finance'));
    }

    #[Test]
    public function user_can_sync_roles()
    {
        $user = User::factory()->create();
        $user->assignRole(['hr', 'finance']);
        $user->syncRoles(['programme-officer']);
        $this->assertFalse($user->hasRole('hr'));
        $this->assertFalse($user->hasRole('finance'));
        $this->assertTrue($user->hasRole('programme-officer'));
    }
} 