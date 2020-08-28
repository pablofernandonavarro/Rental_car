<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLangsTable extends Migration
{
    public function up()
    {
        Schema::create('langs', function (Blueprint $table) {
            $table->id();
            $table->string('lang_name',250);
            $table->string('lang_abbreviation',250);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('langs');
    }
}
