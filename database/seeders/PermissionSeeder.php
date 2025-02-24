<?php

namespace Database\Seeders;

use App\Models\Auth\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** Dashboard Management */
        Permission::insert(['module_id' => '1', 'name' => 'View Dashboard', 'slug' => 'dashboard.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '1', 'name' => 'Show Dashboard', 'slug' => 'dashboard.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '1', 'name' => 'Add Dashboard', 'slug' => 'dashboard.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '1', 'name' => 'Edit Dashboard', 'slug' => 'dashboard.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '1', 'name' => 'Delete Dashboard', 'slug' => 'dashboard.destroy', 'status' => 1, 'created_at' => now()]);

        /**Super User Management */
        Permission::insert(['module_id' => '2', 'name' => 'View S-User', 'slug' => 'super-user.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '2', 'name' => 'Show S-User', 'slug' => 'super-user.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '2', 'name' => 'Add S-User', 'slug' => 'super-user.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '2', 'name' => 'Edit S-User', 'slug' => 'super-user.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '2', 'name' => 'delete S-User', 'slug' => 'super-user.destroy', 'status' => 1, 'created_at' => now()]);

        /** User Management */
        Permission::insert(['module_id' => '3', 'name' => 'View User', 'slug' => 'user.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '3', 'name' => 'Show User', 'slug' => 'user.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '3', 'name' => 'Add User', 'slug' => 'user.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '3', 'name' => 'Edit User', 'slug' => 'user.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '3', 'name' => 'delete User', 'slug' => 'user.destroy', 'status' => 1, 'created_at' => now()]);

        Permission::insert(['module_id' => '4', 'name' => 'View Roles', 'slug' => 'role.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '4', 'name' => 'Show Role', 'slug' => 'role.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '4', 'name' => 'Add Role', 'slug' => 'role.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '4', 'name' => 'Edit Role', 'slug' => 'role.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['module_id' => '4', 'name' => 'delete Role', 'slug' => 'role.destroy', 'status' => 1, 'created_at' => now()]);


    }
}
