<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name" => "New User 1",
            "email" => "newuser@gmail.com",
            "password" => Hash::make('123456'),
        ]);

        DB::table('addresses')->insert([
            "address" => "Rua dos bobos, nº 0",
        ]);
    }
}
