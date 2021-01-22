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

            $table->string('product_code');
            $table->string('EAN');
            $table->string('description')->nullable();
            $table->string('provider')->nullable();
            
            $table->string('jan')->nullable();
            $table->string('fev')->nullable();
            $table->string('mar')->nullable();
            $table->string('abr')->nullable();
            $table->string('mai')->nullable();
            $table->string('jun')->nullable();
            $table->string('jul')->nullable();
            $table->string('ags')->nullable();
            $table->string('set')->nullable();
            $table->string('out')->nullable();
            $table->string('nov')->nullable();
            $table->string('dez')->nullable();

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
