<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foils', function (Blueprint $table) {
            $table->id();
            //$table->integer('brand_id')->unsigned();
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            $table->string('article', 30);
            $table->string('name', 20);
            $table->integer('price');
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
        Schema::dropIfExists('foils');
    }
}
