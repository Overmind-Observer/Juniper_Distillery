<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTastyTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasty_tips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Product_Id');
            $table->string('Title');
            $table->mediumText('Instructions');
            $table->string('Picture_Path');
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
        Schema::dropIfExists('tasty_tips');
    }
}
