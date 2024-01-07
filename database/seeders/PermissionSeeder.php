<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()['cache']->forget('spatie.permission.cache');
        $permissions_array = [
            'admin create' , 'admin update' , 'admin show' , 'admin delete',
        ];

        $permaissons = collect($permissions_array)->map(function($permaissons){
            return [
                'name' => $permaissons , 'guard_name' => 'admins'
            ];

        });

        Permission::insert($permaissons->toArray());
        $role = Role::create(['name' => 'super admin'])->givePermissionTo($permissions_array);
    }
}
