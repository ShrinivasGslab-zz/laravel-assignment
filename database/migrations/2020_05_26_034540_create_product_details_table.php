<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->index('product_id');
            $table->integer('product_id')->unsigned();
            $table->string('stock');
            $table->string('type');
            $table->string('size');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            //$table->timestamp('deleted_at')->nullable();
            $table->softDeletes();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
