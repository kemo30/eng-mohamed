<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admin_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admin = Admin::create([
            'name' => 'super Admin',
            'email' => 'k@test.com',
            'password' => Hash::make(123123123),
        ]);

        $admin->assignRole('super admin');
    }
}
