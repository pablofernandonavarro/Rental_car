<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuotationSeeder extends Seeder
{

    public function run()
    {
        
    $clientsId = DB::table('clients')->where('firstName','Pablo')->value('id');
        DB::table('quotations')->insert ([
            'client_id'     => $clientsId,
            'firstDate'    => '2020-1-1',
            'lastDate'     => '2020-1-5',
            'firstHours'   => '13:32',
            'lasthours'    => '14:00',
            'category_id'    => '1',
            'commets'   => 'esta unidad tiene aire y gps incorporado',
        ]);
  
    }
}
