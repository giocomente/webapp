<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->datetime('date_start');
            //$table->integer('customer_id')->unsigned();
            //$table->foreign('customer_id')->references('id')->on('customers');
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
            $table->string('number_customer', 20);
            $table->string('invoice', 20);
            $table->string('note', 100);
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
        Schema::dropIfExists('orders');
    }
}