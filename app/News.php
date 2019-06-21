<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
            //Table name
            protected $table = 'news';
            //Primary Key
            public $primarykey = 'id';
            //Timestamps
            public $timestamps = true;
        
            public function user()
            {
                return $this->belongsTo('App\user');
            }
}
