<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    private $permision = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete'

    ];

    public function run(): void
    {
        foreach ($this->permision as $permision) {
            Permission::create(['name' =>$permision]);
        }

        $user = User::create([
            'name' => 'Zoirov Maxim',
            'email' => 'zoirov.maxim@elev.cihcahul.md',
            'password' => Hash::make('Maxim2004')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

    }
}
