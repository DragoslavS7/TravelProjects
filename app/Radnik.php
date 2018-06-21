<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radnik extends Model
{
    protected $fillable = ['RadnikIme','Sifra','RadnikJMBG','Adresa','Telefon','SSprema','Pozicija'];
}
