<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_products', function (Blueprint $table) {
           // Tabla que relaciona los productos y los diferentes almacenes

           // Foreign keys de products
           $table->unsignedBigInteger('fk_products');
           // Foreign keys de stores
           $table->unsignedBigInteger('fk_stores');


           $table->foreign('fk_products')->references('id')->on('products')->onDelete('cascade');           
           $table->foreign('fk_stores')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_products');
    }
};
