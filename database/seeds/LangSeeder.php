<?php

use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->insert ([
            'lang_name'          => 'Español',
            'lang_abbreviation'   => 'es',
        ]);
        DB::table('langs')->insert ([
            'lang_name'          => 'Ingles',
            'lang_abbreviation'   => 'en',
        ]);
        DB::table('langs')->insert ([
            'lang_name'          => 'Portugues',
            'lang_abbreviation'   => 'pt',
        ]);

    }
}
