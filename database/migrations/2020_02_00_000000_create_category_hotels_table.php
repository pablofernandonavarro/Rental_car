<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('category_hotels', function (Blueprint $table) {
            $table->id();
            $table->string('category_hotel_name');
            $table->foreignId('lang_id')->references('id')->on('langs')->OnDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_hotels');
    }
}
