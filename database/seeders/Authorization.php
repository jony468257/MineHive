<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Authorization extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'phone' => '01716342698',
            'password' => Hash::make('password'),
        ]);

        $role = Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'farm-admin']);
        $this->call(Permissions::class);

        $permissions = Permission::get();
        $role->syncPermissions($permissions);
        $admin->assignRole($role);
    }
}
