<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
   protected $fillable = [
        'licencia', 'estado', 'job_id'
    ];
}
