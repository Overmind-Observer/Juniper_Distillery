<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('Product_Name');
            $table->mediumText('Description');
            $table->decimal('Price',5,2);
            $table->integer('Capacity');
            $table->mediumText('Spe_Inst');
            $table->boolean('Flag');
            $table->string('Picture_Path');
            $table->integer('Avl_Qty');
            $table->string('Prodcut_Range');
            $table->boolean('InActive');
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
