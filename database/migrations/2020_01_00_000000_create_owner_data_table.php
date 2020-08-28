<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_data', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('owner_address');
            $table->string('owner_phone1');
            $table->string('owner_phone2')->nullable();
            $table->string('owner_mail1');
            $table->string('owner_mail2')->nullable();
            $table->string('owner_website')->nullable();
            $table->string('owner_whatsapp')->nullable();
            $table->string('owner_instagram')->nullable();
            $table->string('owner_facebook')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('owner_data');
    }
}
