<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->unsignedBigInteger('vendor_id');
            $table->integer('no_items');
            $table->integer('total');
            $table->string('order_note');
            $table->unsignedBigInteger('user_id');
            $table->string('status');
            $table->date('expected_delivery_date');
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
        Schema::dropIfExists('purchases');
    }
}
