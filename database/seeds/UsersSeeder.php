<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        // Membuat sample Admin
        $admin = new User();
        $admin->name = "Admin Perpus Ceria";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("123");
        $admin->is_verified = 1;
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample member
        $member = new User();
        $member->name = "Fatimah";
        $member->email = "member1@gmail.com";
        $member->password = bcrypt("121");
        $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);

        $member = new User();
        $member->name = "Yusuf Mansyur";
        $member->email = "member2@gmail.com";
        $member->password = bcrypt("122");
        $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);

        $member = new User();
        $member->name = "Ruqayah Syahrani";
        $member->email = "member3@gmail.com";
        $member->password = bcrypt("124");
        $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);

        $member = new User();
        $member->name = "Chandra Risdianto";
        $member->email = "member4@gmail.com";
        $member->password = bcrypt("125");
        $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);

        $member = new User();
        $member->name = "Qirani Aisyah";
        $member->email = "member5@gmail.com";
        $member->password = bcrypt("126");
        $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);

    }
}
