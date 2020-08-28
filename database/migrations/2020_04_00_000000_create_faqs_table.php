<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('question',1000);
            $table->string('answer',1000);
            $table->foreignId('category_id')->references('id')->on('category_faqs')->nullable()->constrained()->cascadeOnDelete('set null');
            $table->foreignId('lang_id')->references('id')->on('langs')->OnDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
