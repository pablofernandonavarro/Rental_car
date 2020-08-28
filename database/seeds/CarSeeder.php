<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run()
    {   
        $categoryId =       DB::table('category_cars')->where('category_car_name','Compacto')->value('id');
        $brandId =          DB::table('brands')->where('brand_name','Volkswagen')->value('id');
        $patternId =        DB::table('patterns')->where('pattern_name','Gol')->value('id');
        $transmissionId  =  DB::table('transmissions')->where('transmission_name','manual')->value('id');
        $patternId2 =       DB::table('patterns')->where('pattern_name','voyage')->value('id');
        $patternId3 =       DB::table('patterns')->where('pattern_name','Suran')->value('id');
        $patternId4 =       DB::table('patterns')->where('pattern_name','Virtus')->value('id');
        $patternId5 =       DB::table('patterns')->where('pattern_name','Vento')->value('id');
        $patternId6 =       DB::table('patterns')->where('pattern_name','Saveiro')->value('id');
        $patternId7 =       DB::table('patterns')->where('pattern_name','Amarok')->value('id');

        DB::table('cars')->insert ([
            'status_id'             =>  1,
            'category_id'           => $categoryId,
            'brand_id'              => $brandId,
            'pattern_id'            => $patternId,
            'transmission_id'       => $transmissionId,
            'km_x_lts'              => '100',
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'    => "2",
            'luggageBigQuantity'   => '0',
            'luggageSmallQuantity' => '1',
        ]);

        DB::table('cars')->insert ([
            'status_id'             => 1,
            'category_id'           => $categoryId,
            'brand_id'              => $brandId,
            'pattern_id'            => $patternId2,
            'transmission_id'       => $transmissionId,
            'km_x_lts'              => '1000',
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => "2",
            'luggageBigQuantity'    => '0',
            'luggageSmallQuantity'  => '0',
        ]);
        
        DB::table('cars')->insert ([
            'status_id'             => 1,
            'category_id'           => $categoryId,
            'brand_id'              => $brandId,
            'pattern_id'            => $patternId3,
            'transmission_id'       => $transmissionId,
            'km_x_lts'              => '2000',
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => "1",
            'luggageBigQuantity'    => '0',
            'luggageSmallQuantity'  => '1',
        ]);

        DB::table('cars')->insert ([
            'status_id'             => 1,
            'category_id'           => $categoryId,
            'brand_id'              => $brandId,
            'pattern_id'            => $patternId4,
            'transmission_id'       => $transmissionId,
            'km_x_lts'              => '4000',
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => "1",
            'luggageBigQuantity'    => '0',
            'luggageSmallQuantity'  => '1',
        ]);

        DB::table('cars')->insert ([
            'status_id'             => 1,
            'category_id'           => $categoryId,
            'brand_id'              => $brandId,
            'pattern_id'            => $patternId5,
            'transmission_id'       => $transmissionId,
            'km_x_lts'              => '8000',
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => "2",
            'luggageBigQuantity'    => '0',
            'luggageSmallQuantity'  => '1',
        ]);

        DB::table('cars')->insert ([
            'status_id'             => 1,
            'category_id'           => $categoryId,
            'brand_id'              => $brandId,
            'pattern_id'            => $patternId6,
            'transmission_id'       => $transmissionId,
            'km_x_lts'              => '101000',
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => "3",
            'luggageBigQuantity'    => '0',
            'luggageSmallQuantity'  => '0',    
        ]);

        DB::table('cars')->insert ([
            'status_id'             => 1,
            'category_id'           => $categoryId,
            'brand_id'              => $brandId,
            'pattern_id'            => $patternId7,
            'transmission_id'       => $transmissionId,
            'km_x_lts'              => '101000',
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => "3",
            'luggageBigQuantity'    => '0',
            'luggageSmallQuantity'  => '0',
        ]);

        DB::table('cars')->insert([
            'brand_id'              => 2,
            'pattern_id'            => 8,
            'status_id'             => 2,
            'category_id'           => 1,
            'transmission_id'       => 1,
            'km_x_lts'              => 10,
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => 4,
            'luggageBigQuantity'    => 2,
            'luggageSmallQuantity'  => 5,   
        ]);

        DB::table('cars')->insert([
            'brand_id'              => 2,
            'pattern_id'            => 9,
            'status_id'             => 2,
            'category_id'           => 1,
            'transmission_id'       => 1,
            'km_x_lts'              => 9,
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => 4,
            'luggageBigQuantity'    => 3,
            'luggageSmallQuantity'  => 4,    
        ]);

        DB::table('cars')->insert([
            'brand_id'              => 2,
            'pattern_id'            => 10,
            'status_id'             => 2,
            'category_id'           => 1,
            'transmission_id'       => 1,
            'km_x_lts'              => 13,
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => 5,
            'luggageBigQuantity'    => 5,
            'luggageSmallQuantity'  => 6,    
        ]);

        DB::table('cars')->insert([
            'brand_id'              => 2,
            'pattern_id'            => 11,
            'status_id'             => 2,
            'category_id'           => 1,
            'transmission_id'       => 1,
            'km_x_lts'              => 7,
            'text_es' => 'texto en español',
            'text_en' => 'texto en ingles',
            'text_pt' => 'texto en portugues',
            'passengerQuantity'     => 5,
            'luggageBigQuantity'    => 5,
            'luggageSmallQuantity'  => 6,            
        ]);
    }
}
