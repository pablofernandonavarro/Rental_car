<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalTextsTable extends Migration
{

    public function up()
    {
        Schema::create('additional_texts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('additional_id')->OnDelete('cascade');
            $table->foreign('additional_id')->references('id')->on('additionals')->OnDelete('cascade');
            $table->string('additional_name');
            $table->string('additional_description');
            $table->foreignId('lang_id')->nullable()->constrained()->cascadeOnDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('additional_texts');
    }
}
