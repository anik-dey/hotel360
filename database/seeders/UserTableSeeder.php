<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@test.com',
            'is_verified' => 1,
            'employee_id' => 0
        ]);
    }
}
