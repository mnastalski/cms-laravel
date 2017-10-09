<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable(false);
            $table->string('slug')->nullable(false);
            $table->string('name')->nullable(false);
            $table->text('description')->nullable(true);
            $table->integer('views')->unsigned()->default('0');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('shop_categories')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_products');
    }
}
