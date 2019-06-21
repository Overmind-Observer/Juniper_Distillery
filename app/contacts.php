<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{

                //Table name
                protected $table = 'contacts';
                //Primary Key
                public $primarykey = 'id';
                //Timestamps
                public $timestamps = true;

                public function user()
                {
                    return $this->belongsTo('App\user');
                }
}
