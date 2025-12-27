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
        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::table('privileges')->truncate();
        DB::table('privilege_roles')->truncate();
        DB::table('projects')->truncate();
        DB::table('roles')->insert($this->getRoles());
        DB::table('users')->insert($this->getUsers());
        DB::table('privileges')->insert($this->getPrivilege());
        DB::table('privilege_roles')->insert($this->getPrivilegeRole());
        DB::table('projects')->insert($this->getProjects());
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
            ['id' => 5, 'module' => 'Booking', 'name' => 'Booking', 'route_name' => 'booking.list', 'unique_id' => 'booking-li'],
        ];
    }

    private function getPrivilegeRole()
    {
        return [
            ['id' => 1, 'role_id' => 1, 'privilege_id' => 1, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],
            ['id' => 2, 'role_id' => 1, 'privilege_id' => 2, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],
            ['id' => 3, 'role_id' => 1, 'privilege_id' => 3, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],
            ['id' => 4, 'role_id' => 1, 'privilege_id' => 4, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],
            ['id' => 5, 'role_id' => 1, 'privilege_id' => 5, 'has_read_access' => 1, 'has_write_access' => 1, 'has_delete_access' => 1],
        ];
    }

    private function getProjects()
    {
        return [
            ['id' => 1, 'title' => 'Soft Play Supply & Installation', 'location' => 'Cityland Mall, Dubai, UAE', 'service_provided' => 'Concept design, equipment supply & installation, safety compliance, turnkey setup', 'description' => '<p>Delivered a <b>vibrant, safe, and engaging soft play center</b> featuring 6 slides, toddler and kids play areas, trampoline, obstacle course, creative workshops, performing arts space, restaurant and bakery, and party rooms. Designed to <b>entertain up to 250 kids at a time</b> with maximum safety and fun.</p>', 'completion_date' => '2025-05-01', 'user_id' => 1],
            ['id' => 2, 'title' => 'Interactive Play Supply & Installation', 'location' => 'Cityland Mall, Dubai, UAE', 'service_provided' => 'Equipment supply & installation, interactive system integration, safety testing', 'description' => '<p>Installed a <b>dynamic interactive zone</b> with digital trampolines, Interactive Valo Jump, toddler jumping interactives, customized tag challenges, and animated Robo Play challenges. Designed to <b>engage 25 kids at a time</b> and provide a tech-driven, fun, and educational play experience.</p>', 'completion_date' => '2025-05-01', 'user_id' => 1],
            ['id' => 3, 'title' => 'After Sales Service / Maintenance', 'location' => 'Cityland Mall, Dubai, UAE', 'service_provided' => 'Ongoing operations support, maintenance, and safety assurance', 'description' => '<p>Provided <b>comprehensive after-sales support</b> including annual maintenance, regular cleaning and sanitization, safety recertification, equipment checks, and wear & tear refurbishing, ensuring <b>long-term safety and peak performance</b> of all play installations.</p>', 'completion_date' => null, 'user_id' => 1],
        ];
    }
}
