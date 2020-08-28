<?php

use Illuminate\Database\Seeder;

class OwnerDataSeeder extends Seeder
{
    public function run(){

        DB::table('owner_data')->truncate();

        DB::table('owner_data')->insert ([
            'owner_name'     => 'Mendoza Rental',
            'owner_address'  => 'Av. España 948 - Of. 105 - Edificio Premium Tower - Mendoza - Argentina',
            'owner_phone1'   => '+54 261 4233543',
            'owner_phone2'   => '+54 261 155369809',
            'owner_mail1'   => 'info@mendozarental.com',
            'owner_mail2'   => '',
            'owner_website'   => 'http://www.mendozarental.com',
            'owner_whatsapp'   => '+549261536980',
            'owner_instagram'   => '',
            'owner_facebook'   => '',
        ]);
    }
}
