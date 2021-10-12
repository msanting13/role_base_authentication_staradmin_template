<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = new Role();
        $roleAdmin->name = 'super-admin';
        $roleAdmin->description = 'An super admin';
        $roleAdmin->save();

        $roleSuperAdmin = new Role();
        $roleSuperAdmin->name = 'admin';
        $roleSuperAdmin->description = 'An admin';
        $roleSuperAdmin->save();

        $roleUser = new Role();
        $roleUser->name = 'user';
        $roleUser->description = 'Ordinary user';
        $roleUser->save();
    }
}
