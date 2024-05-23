<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function Modulos(){
        return $this->hasMany('App\Models\Modulo');
    }
}
