<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
        //Table Name
        protected $table = 'recipies';
        //Primary Key
        public $primarykey = 'id';
        //Timestamps
        public $timestamps = true;
}
