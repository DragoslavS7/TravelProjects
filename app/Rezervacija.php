<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    protected $fillable = ['ImeKorisnika','PrezimeKorisnika','JMBG','Telefon','Od','Do','Adresa','Soba','Aranzman'];
}
