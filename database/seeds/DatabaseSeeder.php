<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::Statement('SET FOREIGN_KEY_CHECKS = 0;');

        DB::table('brands')->truncate();
        DB::table('patterns')->truncate();
        DB::table('statuses')->truncate();
        DB::table('transmissions')->truncate();
        DB::table('category_cars')->truncate();
        DB::table('additionals')->truncate();
        DB::table('category_hotels')->truncate();
        DB::table('hotels')->truncate();
        DB::table('cars')->truncate();
        DB::table('images')->truncate();
        DB::table('requirements')->truncate();
        DB::table('owner_data')->truncate();
        DB::table('category_faqs')->truncate();
        DB::table('category_faqs')->truncate();
        DB::table('faqs')->truncate();
        DB::table('langs')->truncate();
        DB::table('additional_texts')->truncate();
        DB::table('users')->truncate();

        //DB::table('quotations')->truncate();
        //DB::table('clients')->truncate();

        DB::Statement('SET FOREIGN_KEY_CHECKS = 1;');

        $this->call(LangSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(PatternSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TransmissionSeeder::class);
        $this->call(CategoryCarSeeder::class);
        $this->call(AdditionalSeeder::class);
        $this->call(CategoryHotelSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(RequirementSeeder::class);
        $this->call(OwnerDataSeeder::class);
        $this->call(CategoryFaqSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(AdditionalTextSeeder::class);
        $this->call(UserSeeder::class);
        

        // $this->call(ClientSeeder::class);
        // $this->call(QuotationSeeder::class);

    }
}
