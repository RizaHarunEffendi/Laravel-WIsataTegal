<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = 'wilayah';

    public function wisata()
    {
        return $this->hasMany('App\Wisata');
    }
}
