<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Price');
            $table->integer('Quantity');
            $table->unsignedBigInteger('vendor_id')->unique();
            $table->unsignedBigInteger('brand_id')->unique(); 
            $table->unsignedBigInteger('category_id')->unique(); 
            $table->unsignedBigInteger('unit_id');
            $table->timestamps();

            // Defining foreign key constraint with cascading Update and Deletes
            $table->foreign('brand_id')
            ->references('id')
            ->on('brands')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('unit_id')
            ->references('id')
            ->on('units')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('vendor_id')
            ->references('id')
            ->on('vendors')
            ->onUpdate('cascade')
            ->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
