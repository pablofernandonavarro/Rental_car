<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransmissionsTable extends Migration
{
    public function up()
    {
        Schema::create('transmissions', function (Blueprint $table) {
            $table->id();
            $table->string('transmission_name', 100);
            $table->foreignId('lang_id')->references('id')->on('langs')->OnDelete('set null');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('transmissions');
    }
}
