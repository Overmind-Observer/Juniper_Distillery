<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema ::table('posts', function($table){
            $table ->string('cover_image'); //stirng table for showing name
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema ::table('posts', function($table){
            $table ->dropColumn('cover_image'); 
        });
    }
}
