<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     protected $fillable = [
        'nombre', 'apellido', 'firma','SNN','edad','email'
    ];
}
