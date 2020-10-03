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
            $table->string('name');
            $table->float('price');
            $table->string('sku');
            $table->timestamps();
            $table->longText('description');
            $table->string('weight');
            $table->string('height');
            $table->string('color');
            $table->string('brand');
            $table->string('manufacturer');
            $table->date('manufacturing_date');
            $table->float('discount');
            $table->boolean('is_on_sale');
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
