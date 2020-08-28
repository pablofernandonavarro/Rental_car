<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatternsTable extends Migration
{
    public function up()
    {
        Schema::create('patterns', function (Blueprint $table) {
            $table->id();
            $table->string('pattern_name', 100);
            $table->foreignId('brand_id')->nullable()->constrained()->cascadeOnDelete('set null');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('patterns');
    }
}
