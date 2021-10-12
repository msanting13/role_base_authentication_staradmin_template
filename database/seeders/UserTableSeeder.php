<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roleSuperAdmin = Role::where('name','super-admin')->first();
    	$roleAdmin = Role::where('name','admin')->first();
    	$roleUser = Role::where('name','user')->first();
        
        $superAdmin = new User();
        $superAdmin->name = 'Super Administrator';
        $superAdmin->email = 'super-admin@dev.com';
        $superAdmin->password = Hash::make('password');
        $superAdmin->save();
        $superAdmin->roles()->attach($roleSuperAdmin);

        $admin = new User();
        $admin->name = 'Administrator';
        $admin->email = 'admin@dev.com';
        $admin->password = Hash::make('password');
        $admin->save();
        $admin->roles()->attach($roleAdmin);

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@dev.com';
        $user->password = Hash::make('password');
        $user->save();
        $user->roles()->attach($roleUser);
    }
}
