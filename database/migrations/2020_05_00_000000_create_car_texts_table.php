<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTextsTable extends Migration
{
    public function up()
    {
        Schema::create('car_texts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->nullable()->constrained()->cascadeOnDelete('set null');
            $table->string('car_text', 1000)->nulleable();
            $table->foreignId('lang_id')->nullable()->constrained()->cascadeOnDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_texts');
    }
}
