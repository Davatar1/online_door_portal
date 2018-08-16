<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role;
        $role_employee->name = 'employee';
        $role_employee->role='intern';
        $role_employee->description = 'A Employee User';
        $role_employee->save();
        $employee->roles()->attach($role_employee);

        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->description = 'A Manager User';
        $role_manager->save();
        $manager->roles()->attach($role_manager);
    }
}
