<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role superadmin
        $superadminRole = new Role();
        $superadminRole->name = "superadmin";
        $superadminRole->display_name = "Super Admin";
        $superadminRole->save();
        // Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();
        // Membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        // Membuat sample super admin
        $admin = new User();
        $admin->name = 'Super Admin Larapus';
        $admin->email = 'superadmin@gmail.com';
        $admin->password = bcrypt('qweasd');
        $admin->save();
        $admin->attachRole($superadminRole);
        // Membuat sample admin
        $admin = new User();
        $admin->name = 'Admin Larapus';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('qweasd');
        $admin->save();
        $admin->attachRole($adminRole);
        // Membuat sample member
        $member = new User();
        $member->name = "Sample Member";
        $member->email = 'member@gmail.com';
        $member->password = bcrypt('qweasd');
        $member->save();
        $member->attachRole($memberRole);
    }
}
