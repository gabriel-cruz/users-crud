<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => Str::random(10),
            'cpf' => '11111111111',
            'dt_birth' => '1999-12-21',
            'email' => Str::random(10).'@gmail.com',
            'tel' => '12345678',
            'address'=> Str::random(20),
            'city' => Str::random(10),
            'state' => Str::random(10),
        ]);
    }
}
