<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'field_type',
        'field_name',
        'acceptable_limit',
        'premissible_limit'
    ];
    
}

