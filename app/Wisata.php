<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    //
    protected $table = 'wisata';

    //relasi tabel wilayah
    public function wilayah()
    {
        return $this->belongsTo('App\Wilayah');
    }
}
