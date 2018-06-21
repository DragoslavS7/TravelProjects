<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aranzman extends Model
{
    protected $fillable = ['Destinacija','Kategorija','Prevoz','Hotel','Cena','Viza'];


    public function destinacija() {
        return $this->hasOne('App\Destinacija');
    }

}