<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id')->nullable()->constrained('statuses')->cascadeOnDelete('set null');
            $table->foreignId('category_id')->nullable()->constrained('category_cars')->cascadeOnDelete('set null');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->cascadeOnDelete('set null');
            $table->foreignId('pattern_id')->nullable()->constrained('patterns')->cascadeOnDelete('set null');
            $table->foreignId('transmission_id')->nullable()->constrained('transmissions')->cascadeOnDelete('set null');
            $table->integer('km_x_lts')->nulleable();
            $table->string('text_es')->nulleable();
            $table->string('text_en')->nulleable();
            $table->string('text_pt')->nulleable();
            $table->integer('passengerQuantity')->unsigned()->nulleable();
            $table->integer('luggageBigQuantity')->unsigned()->nulleable();
            $table->integer('luggageSmallQuantity')->unsigned()->nulleable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
