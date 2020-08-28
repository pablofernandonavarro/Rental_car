<?php

use Illuminate\Database\Seeder;

class TransmissionSeeder extends Seeder
{
    public function run()
    {
        DB::table('transmissions')->insert ([
            'transmission_name'  => 'Manual',
            'lang_id'              => '1',
        ]);
        DB::table('transmissions')->insert ([
            'transmission_name'  => 'Automatica',
            'lang_id'              => '2',
        ]);
        DB::table('transmissions')->insert ([
            'transmission_name'  => 'integral',
            'lang_id'              => '3',
        ]);
    }
}
