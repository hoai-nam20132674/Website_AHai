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
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('seo_description')->nullable();
            $table->string('seo_keyword')->nullable();
            $table->string('url');
            $table->boolean('display');
            $table->boolean('hot');
            $table->boolean('best_sale');
            $table->string('avata')->nullable();
            $table->integer('price');
            $table->integer('sale')->nullable();
            $table->boolean('status')->nullable();
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
