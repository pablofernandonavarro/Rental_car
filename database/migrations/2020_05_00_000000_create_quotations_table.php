<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->OnDelete('cascade');
            $table->string('retreat_place')->nullable();
            $table->string('return_place')->nullable();
            $table->dateTime('first_date')->nullable();
            $table->dateTime('last_date')->nullable();
            $table->foreignId('category_id')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category_cars')->OnDelete('cascade');
            $table->string('comments', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
