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
            // $table->integer('order_id')->unsigned();
            // $table->foreign('order_id')->references('id')->on('orders');
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->integer('status')->unsigned();
            // $table->integer('material_id')->unsigned();
            // $table->foreign('material_id')->references('id')->on('materials');
            $table->foreignId('material_id')->constrained()->onDelete('cascade');
            $table->integer('size_1')->unsigned();
            $table->integer('size_2')->unsigned();
            $table->integer('quantity')->unsigned();
            // $table->integer('foil_size_1_id')->unsigned();
            // $table->foreign('foil_size_1_id')->references('id')->on('foils');
            $table->foreignId('foil_id')->constrained('foils')->onDelete('cascade');
            // $table->integer('foil_size_2_id')->unsigned();
            // $table->foreign('foil_size_2_id')->references('id')->on('foils_view');
            $table->foreignId('foil_view_id')->constrained('foils')->onDelete('cascade');
            // $table->integer('foil_size_2')->unsigned();
            // $table->foreign('foil_size_2')->references('id')->on('foil_views');
            $table->string('note');
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
