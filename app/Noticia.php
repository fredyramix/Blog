<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
     protected $fillable = [
        'tirulo', 'descripcion', 'urlImg',
    ];

}
