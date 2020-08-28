<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdditionalsQuotations extends Migration
{
    public function up()
    {
        Schema::create('additionals_quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('additional_id')->OnDelete('cascade');
            $table->foreign('additional_id')->references('id')->on('additionals')->OnDelete('cascade');
            $table->foreignId('quotation_id')->OnDelete('cascade');
            $table->foreign('quotation_id')->references('id')->on('quotations')->OnDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('additionals_quotations');
    }
}
