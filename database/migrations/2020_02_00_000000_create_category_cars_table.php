<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryCarsTable extends Migration
{
    public function up()
    {
        Schema::create('category_cars', function (Blueprint $table) {
            $table->id();
            $table->string('category_car_name', 100);
            $table->foreignId('lang_id')->references('id')->on('langs')->OnDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_cars');
    }
}
