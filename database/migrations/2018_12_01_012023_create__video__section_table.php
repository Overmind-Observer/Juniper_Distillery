<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_section', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Product_Id');
            $table->string('Title');
            $table->mediumText('Video_Path');
            $table->mediumText('Description');
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
        Schema::dropIfExists('video_section');
    }
}
