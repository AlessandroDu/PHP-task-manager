<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pass = password_hash('seederPass', PASSWORD_BCRYPT);

        DB::table('users')->insert([
            ['name' => 'seeder user', 'email' => 'seedermail@gmail.com', 'password' => $pass],
        ]);
    }
}
