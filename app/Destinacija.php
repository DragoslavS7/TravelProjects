<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Destinacija extends Model
{
 protected $fillable = ['Grad','Zemlja','Opisi','Latitude','Longitude'];

    public function aranzman()
    {
        return $this->hasMany('App\Aranzman');
    }

}
