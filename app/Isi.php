<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Isi extends Model
{
    protected $table = 'blogs';

    public function writer()
        {
           return $this->belongsTo('App\User', 'author', 'id');
        }
}


