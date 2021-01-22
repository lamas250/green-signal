<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Usuário Admin',
            'email' => 'adm@teste.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Usuário Analista',
            'email' => 'analista@teste.com',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);
    }
}
