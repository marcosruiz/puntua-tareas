<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_user = Role::create(['name' => 'user']);

        $permission_create_role = Permission::create(['name' => 'create role']);
        $permission_read_role = Permission::create(['name' => 'read roles']);
        $permission_update_role = Permission::create(['name' => 'update role']);
        $permission_delete_role = Permission::create(['name' => 'delete role']);

        $permission_create_questiongroup = Permission::create(['name' => 'create questiongroup']);
        $permission_read_questiongroup = Permission::create(['name' => 'read questiongroup']);
        $permission_update_questiongroup = Permission::create(['name' => 'update questiongroup']);
        $permission_delete_questiongroup = Permission::create(['name' => 'delete questiongroup']);

        $permission_create_question = Permission::create(['name' => 'create question']);
        $permission_read_question = Permission::create(['name' => 'read question']);
        $permission_update_question = Permission::create(['name' => 'update question']);
        $permission_delete_question = Permission::create(['name' => 'delete question']);

        $permission_create_option = Permission::create(['name' => 'create option']);
        $permission_read_option = Permission::create(['name' => 'read option']);
        $permission_update_option = Permission::create(['name' => 'update option']);
        $permission_delete_option = Permission::create(['name' => 'delete option']);

        $permissions_admin = [$permission_create_role, $permission_read_role, $permission_update_role, $permission_delete_role, $permission_create_questiongroup, $permission_read_questiongroup, $permission_update_questiongroup, $permission_delete_questiongroup, $permission_create_question, $permission_read_question, $permission_update_question, $permission_delete_question, $permission_create_option, $permission_read_option, $permission_update_option, $permission_delete_option];

        $permissions_user = [$permission_delete_role, $permission_create_questiongroup, $permission_read_questiongroup, $permission_update_questiongroup, $permission_delete_questiongroup, $permission_create_question, $permission_read_question, $permission_update_question, $permission_delete_question, $permission_create_option, $permission_read_option, $permission_update_option, $permission_delete_option];

        $role_admin->syncPermissions($permissions_admin);
        $role_user->syncPermissions($permissions_user);

    }
}
