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
            $table->string('pid');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('author');
            $table->bigInteger('price');
            $table->bigInteger('discount')->nullable();
            $table->bigInteger('available');
            $table->string('publisher');
            $table->string('edition');
            $table->string('category');
            $table->text('description');
            $table->string('language');
            $table->bigInteger('page');
            $table->bigInteger('weight');
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
        Schema::dropIfExists('products');
    }
}
