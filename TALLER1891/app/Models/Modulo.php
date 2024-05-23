<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    //Relacion Uno a Muchos con post
 public function Profesors(){
    return $this->belongsTo('App\Models\Profesor');
}
}
