<?php

use Illuminate\Database\Seeder;

class PatternSeeder extends Seeder
{
    public function run()
    {
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Gol',
            'brand_id'=> 1
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Voyage',
            'brand_id'=> 1
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Suran',
            'brand_id'=> 1
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Virtus',
            'brand_id'=> 1
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Vento',
            'brand_id'=> 1
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Saveiro',
            'brand_id'=> 1
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Amarok',
            'brand_id'=> 1
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Onix',
            'brand_id'=> 2
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Prisma',
            'brand_id'=> 2
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Trailblazer',
            'brand_id'=> 2
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Spin',
            'brand_id'=> 2
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Etios',
            'brand_id'=> 3
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Corolla',
            'brand_id'=> 3
        ]);
        DB::table('patterns')->insert ([
        'pattern_name'  => 'Hilux doble cabina',
            'brand_id'=> 3
        ]);
        DB::table('patterns')->insert ([
        'pattern_name'  => 'Hilux 4x4',
            'brand_id'=> 3
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'H1',
            'brand_id'=> 4
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Vitto',
            'brand_id'=> 5
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Sprinter',
            'brand_id'=> 5
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Ka',
            'brand_id'=> 6
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'EcoSport',
            'brand_id'=> 6
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Kuga',
            'brand_id'=> 6
        ]);
        DB::table('patterns')->insert ([
            'pattern_name'  => 'Mondeo',
            'brand_id'=> 6
        ]);
    }
}
