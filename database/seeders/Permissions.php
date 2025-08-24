<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class Permissions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'group_name' => 'Dashboard',
                'permissions' => [
                    'dashboard.view',
                ]
            ],

            // user permission
            [
                'group_name' => 'User',
                'permissions' => [
                    'user.create',
                    'user.list',
                    'user.show',
                    'user.edit',
                    'user.delete',
                ]
            ],

            // role permission
            [
                'group_name' => 'Role',
                'permissions' => [
                    'role.create',
                    'role.list',
                    'role.edit',
                    'role.delete',
                ]
            ],
        ];

        foreach ($permissions as $i => $pd) {
            $group = $pd['group_name'];
            foreach ($pd['permissions'] as $j => $permission) {
                Permission::create(['name' => $permission, 'group_name' => $group]);
            }
        }
    }
}
