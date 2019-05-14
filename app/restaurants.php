<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurants extends Model
{
    protected $fillable = [
        'name', 'description', 'position', 'rate', 'numofrates', 'average'
    ];
}
