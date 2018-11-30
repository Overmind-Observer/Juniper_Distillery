<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Table Name
    protected $table ='products';
    //Primary Key
    public $primarykey ='id';
    //Timestamps
    public $timestamps =true;
}
