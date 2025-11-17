<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('roles')->insert($this->getRoles());
        DB::table('users')->insert($this->getUsers());
        DB::table('privileges')->insert($this->getPrivilege());
        DB::table('privilege_roles')->insert($this->getPrivilegeRole());
    }

    private function getRoles()
    {
        return [
            ['id' => 1, 'name' => 'Admin', 'description' => 'Full access to the system'],
        ];
    }

    private function getUsers()
    {
        return [
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@innovative.com', 'password' => bcrypt('123456'), 'role_id' => 1],
        ];
    }

    private function getPrivilege()
    {
        return [
            ['id' => 1, 'module' => 'Settings', 'name' => 'Role', 'route_name' => 'role.list', 'unique_id' => 'role-li'],
            ['id' => 2, 'module' => 'Settings', 'name' => 'User', 'route_name' => 'user.list', 'unique_id' => 'user-li'],
            ['id' => 3, 'module' => 'Project', 'name' => 'Project', 'route_name' => 'project.list', 'unique_id' => 'project-li'],
            ['id' => 4, 'module' => 'Product', 'name' => 'Product', 'route_name' => 'product.list', 'unique_id' => 'product-li'],
        ];
    }

    private function getPrivilegeRole()
    {
        return [
            ['id' => 1, 'role_id' => 1, 'privilege_id' => 1, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],
            ['id' => 2, 'role_id' => 1, 'privilege_id' => 2, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],
            ['id' => 3, 'role_id' => 1, 'privilege_id' => 3, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],
            ['id' => 4, 'role_id' => 1, 'privilege_id' => 4, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],

        ];
    }
}
