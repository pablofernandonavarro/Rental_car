<?php

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    //A revisar
    public function run()
    {
        DB::table('hotels')->truncate();

        DB::table('hotels')->insert ([
            'hotel_name'  => 'Park Hyatt Mendoza',
            'category_id' => '1',
            'address'     => 'Chile 124',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4411234',
            'email'       => 'hoteluno@gmail.com',
            'website'     => 'http://www.mendoza.park.hyatt.com',
            'discount'    => '1',
            'promotion'   => 0,
        ]);
        DB::table('hotels')->insert ([
            'hotel_name'  => 'Sheraton Hotel Mendoza',
            'category_id' => '1',
            'address'     => 'Primitivo de la Reta 989',
            'location'    => 'Mendoza',
            'phone'       => '(54 261) 4415500',
            'email'       => '',
            'website'     => 'http://www.starwoodhotels.com/sheraton/property/overview/index.html?propertyID=1733',
            'discount'    => '1',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Diplomatic Park Suites',
            'category_id' => '1',
            'address'     => 'Belgrano 1041',
            'location'    => 'Mendoza',
            'phone'       => '(54 261) 405 1900',
            'email'       => '',
            'website'     => 'http://www.diplomatic.parksuites.com.ar',
            'discount'    => '1',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Premium Tower Suites',
            'category_id' => '2',
            'address'     => 'Av. España 948',
            'location'    => 'Mendoza',
            'phone'       => '(54261) 425-3533',
            'email'       => '',
            'website'     => '1http://www.hotelpremiumtower.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'The Modern Hotel',
            'category_id' => '2',
            'address'     => 'Federico Moreno 1230',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4597777',
            'email'       => '',
            'website'     => 'http://www.the-mod.com',
            'discount'    => '1',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Aconcagua Hotel',
            'category_id' => '2',
            'address'     => 'San Lorenzo 545',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 5200500',
            'email'       => '',
            'website'     => 'http://www.hotelaconcagua.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Executive Park Suites',
            'category_id' => '2',
            'address'     => 'San Lorenzo 660',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 5245000',
            'email'       => '',
            'website'     => 'http://www.parksuites.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Huentala',
            'category_id' => '2',
            'address'     => 'Primitivo de la Reta 1007',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4200766/941',
            'email'       => '',
            'website'     => 'http://www.hotelhuentala.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Internacional',
            'category_id' => '2',
            'address'     => 'Av. Sarmiento 720',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4255600',
            'email'       => '',
            'website'     => 'http://www.internacional.com',
            'discount'    => '1',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Hotel Crillon',
            'category_id' => '3',
            'address'     => 'Peru 1065',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4298494',
            'email'       => '',
            'website'     => 'http://www.hcrillon.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'NH-Cordillera',
            'category_id' => '3',
            'address'     => 'Av. España 1324',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4416464',
            'email'       => '',
            'website'     => 'http://www.nh-hoteles.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Reina Victoria',
            'category_id' => '3',
            'address'     => 'San Juan 1127',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 425-9800',
            'email'       => '',
            'website'     => 'http://www.reinavictoria.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Villagio Hotel Boutique',
            'category_id' => '3',
            'address'     => '25 de Mayo 1010',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 524-5200',
            'email'       => '',
            'website'     => 'http://www.hotelvillaggio.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Montañas Azules',
            'category_id' => '3',
            'address'     => 'Perú 1290 ',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4054200',
            'email'       => '',
            'website'     => 'http://www.mazules.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Portal Suites',
            'category_id' => '3',
            'address'     => 'Necochea 661',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 438-2038',
            'email'       => '',
            'website'     => 'http://www.elportalsuites.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Solaz de los Andes',
            'category_id' => '3',
            'address'     => 'Brasil 308',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 405-7600',
            'email'       => '',
            'website'     => 'http://www.solazdelosandes.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Condor Suites',
            'category_id' => '3',
            'address'     => 'Leonidas Aguirre 90',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4054440',
            'email'       => '',
            'website'     => 'http://www.condorsuites.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Cordon del Plata',
            'category_id' => '3',
            'address'     => '9 de Julio 1539',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4230250',
            'email'       => '',
            'website'     => 'http://www.hotelcordondelplata.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Gran Hotel Mendoza',
            'category_id' => '3',
            'address'     => 'España 1210',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4051405',
            'email'       => '',
            'website'     => 'http://www.hotelmendoza.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Hotel Argentino',
            'category_id' => '3',
            'address'     => 'Espejo 455',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4056300',
            'email'       => '',
            'website'     => 'http://www.argentino-hotel.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Hotel Ibis',
            'category_id' => '3',
            'address'     => 'Lat. Sur Acceso Este 4241',
            'location'    => 'Guaymallen',
            'phone'       => '(54-261) 4264600',
            'email'       => '',
            'website'     => 'http://www.ibishotel.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Hotel Bonarda',
            'category_id' => '3',
            'address'     => 'Uspallata 840',
            'location'    => 'Guaymallen',
            'phone'       => '(54-261) 4320503',
            'email'       => '',
            'website'     => 'http://www.hotelbonarda.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Club Tapiz',
            'category_id' => '4',
            'address'     => 'Pedro Molina s/n Russell (Ruta prov. 60)',
            'location'    => 'Maipú',
            'phone'       => '(54-011) 5237-1405',
            'email'       => '',
            'website'     => 'http://www.tapiz.com.ar/shop/index.html',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Finca Adalgisa',
            'category_id' => '4',
            'address'     => 'Pueyrredón 2222',
            'location'    => 'Chacras de Coria',
            'phone'       => '(54-261) 496-0713',
            'email'       => '',
            'website'     => 'http://www.fincaadalgisa.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Lares de Chacras',
            'category_id' => '4',
            'address'     => 'Larrea 1266',
            'location'    => 'Chacras de Coria',
            'phone'       => '(54-261) 496-1061',
            'email'       => '',
            'website'     => 'http://www.laresdechacras.com',
            'discount'    => '1',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Posada Borravino',
            'category_id' => '4',
            'address'     => 'Medrano 2658',
            'location'    => 'Chacras de Coria',
            'phone'       => '(54-261) 4964445',
            'email'       => '',
            'website'     => 'http://www.posadaborravino.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Cavas Wine Lodge',
            'category_id' => '4',
            'address'     => 'CostaFlores s/n',
            'location'    => 'Alto Agreglo',
            'phone'       => '',
            'email'       => '',
            'website'     => 'http://www.cavaswinelodge.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Posada Salentein',
            'category_id' => '4',
            'address'     => 'Ruta Prov. 89 esq. E. Videla',
            'location'    => 'Los Arboles Tunuyan',
            'phone'       => '(54-2622) 429000',
            'email'       => '',
            'website'     => 'http://www.bodegasalentein.com',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Robles de Besares',
            'category_id' => '4',
            'address'     => 'Besares 796',
            'location'    => 'Chacras de Coria',
            'phone'       => '(54-261) 496-2383',
            'email'       => '',
            'website'     => 'http://www.roblesdebesares.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Hostel Damajuana',
            'category_id' => '5',
            'address'     => 'Arístides Villanueva 282',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4255858',
            'email'       => '',
            'website'     => 'http://www.damajuanahostel.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Álamo',
            'category_id' => '5',
            'address'     => 'Necochea 740',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4295565',
            'email'       => '',
            'website'     => 'http://hostelalamo.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);

            DB::table('hotels')->insert ([
            'hotel_name'  => 'Wiknca',
            'category_id' => '5',
            'address'     => 'San Lorenzo 29',
            'location'    => 'Mendoza',
            'phone'       => '',
            'email'       => '',
            'website'     => 'http://www.wincashostel.com.ar/sanlorenzo.php',
            'discount'    => '',
            'promotion'   => 0,
        ]);
            DB::table('hotels')->insert ([
            'hotel_name'  => 'Tierra Mendocina',
            'category_id' => '5',
            'address'     => 'Belgrano 1494',
            'location'    => 'Mendoza',
            'phone'       => '(54-261) 4250160',
            'email'       => '',
            'website'     => 'http://www.tierramendocina.com.ar',
            'discount'    => '',
            'promotion'   => 0,
        ]);

    }
}

