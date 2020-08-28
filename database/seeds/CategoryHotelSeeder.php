<?php

use Illuminate\Database\Seeder;

class CategoryHotelSeeder extends Seeder
{
    public function run()
    {
        DB::table('category_hotels')->insert ([
            'category_hotel_name'  => 'Hoteles 5 estrellas',
            'lang_id'              => '1',
        ]);
        DB::table('category_hotels')->insert ([
            'category_hotel_name'  => 'Hoteles 4 estrellas',
            'lang_id'              => '1',
        ]);
        DB::table('category_hotels')->insert ([
            'category_hotel_name'  => 'Hoteles 3 estrellas',
            'lang_id'              => '2',
        ]);
        DB::table('category_hotels')->insert ([
            'category_hotel_name'  => 'Alojamientos rurales y en bodegas',
            'lang_id'              => '3',
        ]);
        DB::table('category_hotels')->insert ([
            'category_hotel_name'  => 'Hostels',
            'lang_id'              => '1',
        ]);
    }
}