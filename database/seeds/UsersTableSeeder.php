<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.net',
            'password' => Hash::make('adminadmin'),
        ]);
    }
}
