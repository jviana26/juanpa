<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'username' => 'Superadmin',
            'password' => bcrypt('JESUSviana2605'),
        ]);

        $user->assignRole('Admin');
    }
}
