<?php

use Illuminate\Database\Seeder;

class AdditionalTextSeeder extends Seeder
{
    public function run()
    {
        DB::table('additional_texts')->insert ([
            'additional_id' => 1,
            'additional_name'  => 'G.P.S.',
            'additional_description'  => 'G.P.S para no perderte',
            'lang_id' => 1
        ]);
        DB::table('additional_texts')->insert ([
            'additional_id' => 2,
            'additional_name'  => 'Silla para bebé',
            'additional_description'  => 'Para mantener a tu hijo seguro',
            'lang_id' => 1
        ]);
        DB::table('additional_texts')->insert ([
            'additional_id' => 3,
            'additional_name'  => 'Porta equipajes',
            'additional_description'  => 'Tenés equipaje de más? No te preocupes',
            'lang_id' => 1
        ]);
        DB::table('additional_texts')->insert ([
            'additional_id' => 4,
            'additional_name'  => 'Cadenas para la nieve',
            'additional_description'  => 'No pierdas la oportunidad ir al sur en invierno',
            'lang_id' => 1
        ]);
        DB::table('additional_texts')->insert ([
            'additional_id' => 5,
            'additional_name'  => 'Alquiler de bicicletas',
            'additional_description'  => 'Un extra que nunca viene mal',
            'lang_id' => 1
        ]);
        DB::table('additional_texts')->insert ([
            'additional_id' => 6,
            'additional_name'  => 'Entrega de vehículo en cualquier ciudad de Argentina y Chile',
            'additional_description'  => 'Desde donde quieras',
            'lang_id' => 1
        ]);
        DB::table('additional_texts')->insert ([
            'additional_id' => 7,
            'additional_name'  => 'Delivery de vehículos en hotel y aeropuerto',
            'additional_description'  => 'Podes dejar el auto donde quieras',
            'lang_id' => 1
        ]);
        DB::table('additional_texts')->insert ([
            'additional_id' => 8,
            'additional_name'  => 'Trámite de permiso de cruce a Chile',
            'additional_description'  => 'No te preocupes, solo viaja!!',
            'lang_id' => 1
        ]);
    }
}
