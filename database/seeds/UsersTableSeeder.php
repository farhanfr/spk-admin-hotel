<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'	=>'admin',
            'username'	=> 'admin',
            'password'	=> \Illuminate\Support\Facades\Hash::make('admin')
        ]);
    }
}
