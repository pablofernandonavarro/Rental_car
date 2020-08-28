<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->insert ([
            'brand_name'  => 'Volkswagen'
        ]);
        DB::table('brands')->insert ([
            'brand_name'  => 'Chevrolet'    
        ]);
        DB::table('brands')->insert ([
            'brand_name'  => 'Toyota',
        ]);
        DB::table('brands')->insert ([
            'brand_name'  => 'Hyundai',
        ]);   
        DB::table('brands')->insert ([
            'brand_name'  => 'Mercedes-Benz',
        ]);
        DB::table('brands')->insert ([
            'brand_name'  => 'Ford',
        ]);
    }
}
