<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
        
            $table->foreignId('order_id')->constrained()->onDelete('cascade');

            $table->integer('status')->unsigned();
        
            $table->foreignId('material_id')->constrained()->onDelete('cascade');

            $table->integer('size_1')->unsigned();

            $table->integer('size_2')->unsigned();

            $table->integer('quantity')->unsigned();
            
            $table->foreignId('foil_id')->constrained('foils')->onDelete('cascade');
            
            $table->foreignId('foil_view_id')->constrained('foils')->onDelete('cascade');
           
            $table->string('note')->nullable();

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
        Schema::dropIfExists('works');
    }
}
