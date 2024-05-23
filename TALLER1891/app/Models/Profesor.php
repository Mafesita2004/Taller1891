<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
   //Relacion Uno a Muchos con post
  public function Modulos(){
    return $this->belongsTo('App\Models\Modulo');
  }
}