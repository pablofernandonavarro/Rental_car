<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    //A revisar
    public function run()
    {

       // $quotationid  =  DB::table('quotations')
       //                      ->where('client_id','1')
       //                      ->value('id');

        DB::table('clients')->insert ([

            'firstName'    => 'Pablo',
            'lastName'     => 'navarro',
            'email'        => 'aaaaaj@gmail.com',
            'phone'        => '15034403490',
            'age'          => '12'

        ]);
        DB::table('clients')->insert ([

            'firstName' => 'Urial',
            'lastName'  => 'sosa',
            'email'     => 'bbbbbb@gmail.com',
            'phone'     => '1511111111111',
            'age'          => '25'

        ]);
        DB::table('clients')->insert ([

            'firstName' => 'Horacio',
            'lastName'  => 'Rozanski',
            'email'     => 'ccccccc@gmail.com',
            'phone'     => '15222222222222',
            'age'          => '50'

        ]);
    }
}
