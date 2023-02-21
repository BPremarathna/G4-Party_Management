<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $initialUsers = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '123456789',
            ],
            [
                'name' => 'Admin 2',
                'email' => 'admin2@gmail.com',
                'password' => '123456789',
            ]
        ];

        foreach ($initialUsers as $user) {
            $admin = User::where('email', $user['email'])->first();
            if (!$admin) {
                $admin = User::create([
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => bcrypt($user['password']),
                    'role' => 1,
                ]);
            }
        }

    }
}

