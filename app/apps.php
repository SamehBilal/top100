<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apps extends Model
{
    protected $fillable = [
        'name', 'description', 'position', 'rate', 'numofrates', 'average'
    ];
}
