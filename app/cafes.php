<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cafes extends Model
{
    protected $fillable = [
        'name', 'description', 'position', 'rate', 'numofrates', 'average'
    ];
}
