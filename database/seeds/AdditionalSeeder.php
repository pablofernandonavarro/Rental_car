<?php

use Illuminate\Database\Seeder;

class AdditionalSeeder extends Seeder
{
    public function run()
    {
        DB::table('additionals')->insert ([
            'additional_image'  => '/public_images/additionals/gps.png',
        ]);
        DB::table('additionals')->insert ([
            'additional_image'  => '/public_images/additionals/bebe.png',
        ]);
        DB::table('additionals')->insert ([
            'additional_image'  => '/public_images/additionals/portaequipajes.jpg',
        ]);
        DB::table('additionals')->insert ([
            'additional_image'  => '/public_images/additionals/cadenas para la nieve.jpg',
        ]);
        DB::table('additionals')->insert ([
            'additional_image'  => '/public_images/additionals/bicicleta.jpg',
        ]);
        DB::table('additionals')->insert ([
            'additional_image'  => '/public_images/additionals/arg-chile.jpg',
        ]);
        DB::table('additionals')->insert ([
            'additional_image'  => '/public_images/additionals/arg-chile.jpg',
        ]);
        DB::table('additionals')->insert ([
            'additional_image'  => '/public_images/additionals/arg-chile.jpg',
        ]);
    }
}
