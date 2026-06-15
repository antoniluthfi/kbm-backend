<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name'      => 'Super Admin',
                'email'     => 'superadmin@kbm.id',
                'phone'     => '081200000001',
                'password'  => 'password',
                'role'      => UserRole::SuperAdmin,
                'is_active' => true,
            ],
            [
                'name'      => 'Ahmad Fauzi',
                'email'     => 'pengajar@kbm.id',
                'phone'     => '081200000002',
                'password'  => 'password',
                'role'      => UserRole::Pengajar,
                'is_active' => true,
            ],
            [
                'name'      => 'Budi Santoso',
                'email'     => 'murid@kbm.id',
                'phone'     => '081200000003',
                'password'  => 'password',
                'role'      => UserRole::Murid,
                'is_active' => true,
            ],
            [
                'name'      => 'Siti Rahayu',
                'email'     => 'walimurid@kbm.id',
                'phone'     => '081200000004',
                'password'  => 'password',
                'role'      => UserRole::WaliMurid,
                'is_active' => true,
            ],
        ];

        foreach ($users as $data) {
            User::firstOrCreate(['email' => $data['email']], $data);
        }
    }
}
