<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('statuses')->insert ([
            'status_name'  => 'Rentado',
        ]);
        DB::table('statuses')->insert ([
            'status_name'  => 'Libre',
        ]);
        DB::table('statuses')->insert ([
            'status_name'  => 'En reparacion',
        ]);
    }
}
