<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert ([
            'name' => 'Administrador',
            'email' => 'mendozarental@gmail.com',
            'password' => Hash::make('mendozaRental1234'),
        ]);
    }
}
