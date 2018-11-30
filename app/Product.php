<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*
    //Table Name
    protected $table = 'products';
    //Primary Key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
    */

    public function presentPrice()  
    {
        return sprintf('$%01.2f',$this->product_price / 100);
    }
}
