<?php

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
        User::create([
            'name' => 'test1',
            'email' => 'test1@gmail.com',
            'password' => '123456',
        ])->assignRole('user');
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '123456',
        ])->assignRole('admin');
    }
}
