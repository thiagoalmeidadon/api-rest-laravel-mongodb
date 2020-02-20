<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Usuario extends Model
{

    protected $collection = 'usuarios';
    
    protected $fillable = [
        'name', 'idade',
    ];
}
