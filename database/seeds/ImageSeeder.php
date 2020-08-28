<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{

    public function run()
    {
        /*Gol */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Gol/Gol1.jpg',
            'car_id'=> 1,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Gol/Gol2.jpg',
            'car_id'=> 1,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Gol/Gol3.jpg',
            'car_id'=> 1,
        ]);
        /*Voyage */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Voyage/Voyage1.jpg',
            'car_id'=> 2,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Voyage/Voyage2.jpg',
            'car_id'=> 2,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Voyage/Voyage3.jpg',
            'car_id'=> 2,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Voyage/Voyage4.jpg',
            'car_id'=> 2,
        ]);
        /*Suran */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Suran/Suran1.jpg',
            'car_id'=> 3,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Suran/Suran2.jpg',
            'car_id'=> 3,
        ]);
        /*Virtus */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Virtus/Virtus1.jpg',
            'car_id'=> 4,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Virtus/Virtus2.jpg',
            'car_id'=> 4,
        ]);
        /*Vento */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Vento/Vento1.jpg',
            'car_id'=> 5,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Vento/Vento2.jpg',
            'car_id'=> 5,
        ]);
        /*Saveiro */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Saveiro/Saveiro1.jpg',
            'car_id'=> 6,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Saveiro/Saveiro2.jpg',
            'car_id'=> 6,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Saveiro/Saveiro3.jpg',
            'car_id'=> 6,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Saveiro/Saveiro4.jpg',
            'car_id'=> 6,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Saveiro/Saveiro5.jpg',
            'car_id'=> 6,
        ]);
        /*Amarok */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Amarok/Amarok1.jpg',
            'car_id'=> 7,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Amarok/Amarok2.jpg',
            'car_id'=> 7,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Amarok/Amarok3.jpg',
            'car_id'=> 7,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Amarok/Amarok4.jpg',
            'car_id'=> 7,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Amarok/Amarok5.jpg',
            'car_id'=> 7,
        ]);
        /*Onix */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Onix/Onix1.jpg',
            'car_id'=> 8,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Onix/Onix2.jpg',
            'car_id'=> 8,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Onix/Onix3.jpg',
            'car_id'=> 8,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Onix/Onix4.jpg',
            'car_id'=> 8,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Onix/Onix5.jpg',
            'car_id'=> 8,
        ]);
        /*Prisma */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Prisma/Prisma1.jpg',
            'car_id'=> 9,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Prisma/Prisma2.jpg',
            'car_id'=> 9,
        ]);
        /*Trailblazer */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Trailblazer/Trailblazer1.jpg',
            'car_id'=> 10,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Trailblazer/Trailblazer2.jpg',
            'car_id'=> 10,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Trailblazer/Trailblazer3.jpg',
            'car_id'=> 10,
        ]);
        /*Spin */
        DB::table('images')->insert([
            'image_name'=> '/public_images/Spin/Spin1.jpg',
            'car_id'=> 11,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Spin/Spin2.jpg',
            'car_id'=> 11,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Spin/Spin3.jpg',
            'car_id'=> 11,
        ]);
        DB::table('images')->insert([
            'image_name'=> '/public_images/Spin/Spin4.jpg',
            'car_id'=> 11,
        ]);
    }
}
