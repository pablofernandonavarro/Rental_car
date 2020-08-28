<?php

use Illuminate\Database\Seeder;

class CategoryCarSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Compacto',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Mediano',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Grande',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'SUV',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Van y Minivan',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Pick up',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Utilitario',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Bus',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Categoría I',
            'lang_id'            => 1,
        ]);
        DB::table('category_cars')->insert ([
            'category_car_name'  => 'Categoría J',
            'lang_id'            => 1,
        ]);
    }
}
