<?php

use Illuminate\Database\Seeder;

class CategoryFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_faqs')->insert ([
            'category_faq_name'  => 'El seguro en el coche de alquiler',
            'lang_id'              => '1',
        ]);
        DB::table('category_faqs')->insert ([
            'category_faq_name'  => 'Opciones de Pago',
            'lang_id'              => '2',
        ]);
         DB::table('category_faqs')->insert ([
            'category_faq_name'  => 'Tarifas y Cobros',
            'lang_id'              => '2',

        ]);
         DB::table('category_faqs')->insert ([
            'category_faq_name'  => 'Alterar o Cancelar una reserva',
            'lang_id'              => '2',

        ]); 
        DB::table('category_faqs')->insert ([
            'category_faq_name'  => 'Confirmación de Reserva',
            'lang_id'              => '2',
        ]); 
        DB::table('category_faqs')->insert ([
            'category_faq_name'  => 'Servicios y Opcionales',
            'lang_id'              => '1',

        ]); DB::table('category_faqs')->insert ([
            'category_faq_name'  => 'Durante tu alquiler de coche',
            'lang_id'              => '2',

        ]); DB::table('category_faqs')->insert ([
            'category_faq_name'  => 'Requisitos para alquilar un coche',
            'lang_id'              => '3',
        ]);
    }
    
}
