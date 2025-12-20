<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $superAdminRole = \Spatie\Permission\Models\Role::create(['name' => 'super-admin']);
        $adminRole = \Spatie\Permission\Models\Role::create(['name' => 'admin']);
        $tipsterRole = \Spatie\Permission\Models\Role::create(['name' => 'tipster']);
    }
}
