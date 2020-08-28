<?php

use Illuminate\Database\Seeder;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Edad mínima de alquiler: 21 años.',
            'lang_id'              => '1',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Pago del alquiler con tarjeta de crédito (consulte opciones en caso de no poseer).',
            'lang_id'              => '1',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'El automóvil se entrega con el depósito de combustible completo, debiendo devolverlo de igual forma.',
            'lang_id'              => '1',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'En caso de hurto, robo, siniestro o colisión, será necesario presentar una denuncia radicada ante la autoridad correspondiente.',
            'lang_id'              => '1',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'La devolución del automóvil en otro local, ciudad o destino que se indique, implicará abonar el cargo de la Tasa de Retorno.',
            'lang_id'              => '1',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'La utilización de adiciones tales como silla de bebé, GPS, Celular, etc son con cargo adicional.',
            'lang_id'              => '1',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Minimum Age for Rental: 21 years old.',
            'lang_id'              => '2',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Driver License from country of origin in force during rental period.',
            'lang_id'              => '2',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Credit Card Payment (ask about other payment options).',
            'lang_id'              => '2',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Daily Rental Rate includes car rental for 24 hs.',
            'lang_id'              => '2',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'The car is handed over with the tank full and must be delivered in the same way.',
            'lang_id'              => '2',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'In case of theft, robbery, accident or collision, it will be necessary to present the crime report before the competent official authority.',
            'lang_id'              => '2',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'The return of the vehicle in a different office, city or destination, will imply the payment of the Return Fee.',
            'lang_id'              => '2',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'The use of add-ons such as baby-sits, GPS, cell phone, etc implies an additional charge. Ask us at our commercial office.',
            'lang_id'              => '2',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Idade mínima 21 anos.',
            'lang_id'              => '3',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Carteira de conduzir do país de origem vigente durante os dias do aluguel do veiculo.',
            'lang_id'              => '3',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Pago do aluguel com cartão de crédito (consulte opções em caso não possuir).',
            'lang_id'              => '3',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Tarifa por dia inclui o aluguel do automóvel por 24h.',
            'lang_id'              => '3',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'O automóvel se entrega com o tanque de combustível completo, devendo ser devolvido da mesma maneira.',
            'lang_id'              => '3',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'Em caso de furto, roubo, sinistro ou colisão, será necessário apresentar uma denuncia perante a autoridade correspondente.',
            'lang_id'              => '3',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'A devolução do automóvel em outro local, cidade ou destino que se indique, implicará em pagar cargo de Taxa de Retorno.',
            'lang_id'              => '3',
        ]);
        DB::table('requirements')->insert ([
            'requirement_name'  => 'A utilização de adicionais tal como cadeira de bebe, GPS, Celular, etc. são com cargo adicional. Consulte em nosso escritório comercial.',
            'lang_id'              => '3',
        ]);

    }
}
